<?php
namespace Incos\Api;
final class ResourceRepository {
    private $db; public $definition;
    public function __construct(\PDO $db,array $definition) { $this->db=$db; $this->definition=$definition; }
    public function run(string $sql,array $values=[]): \PDOStatement {
        $s=$this->db->prepare($sql); foreach(array_values($values) as $i=>$v) $s->bindValue($i+1,$v,is_int($v)?\PDO::PARAM_INT:($v===null?\PDO::PARAM_NULL:\PDO::PARAM_STR)); $s->execute();return $s;
    }
    private function fields(): string { return implode(',',array_map(function($x){return '`'.$x.'`';},$this->definition['columns'])); }
    public function one(int $id): array {
        $d=$this->definition;$row=$this->run('SELECT '.$this->fields().' FROM `'.$d['table'].'` WHERE `'.$d['pk'].'`=?',[$id])->fetch();
        if(!$row)throw new ApiError(404,'Registro no encontrado.');return $row;
    }
    public function listing(array $query,bool $publishedOnly=false,array $scope=[]): array {
        $d=$this->definition; $where=[];$values=[];
        foreach(array_merge($query,$scope) as $key=>$value) {
            if(in_array($key,$d['columns'],true)) { if(!is_scalar($value))throw new ApiError(422,'Filtro inválido.');$where[]='`'.$key.'`=?';$values[]=$value; }
        }
        if($publishedOnly) { $where[]='`estado`=1'; }
        if(isset($query['q']) && $query['q']!=='') {
            if(!is_string($query['q']) || strlen($query['q'])>200)throw new ApiError(422,'Búsqueda inválida.');
            $search=array_intersect(['titulo','nombre','nombreCompleto','nombre_carrera','nombreM','nombre_lice','autor'],$d['columns']);
            if($search) { $or=[];foreach($search as $col){$or[]='`'.$col.'` LIKE ?';$values[]='%'.$query['q'].'%';}$where[]='('.implode(' OR ',$or).')'; }
        }
        $page=filter_var($query['page']??1,FILTER_VALIDATE_INT,['options'=>['min_range'=>1,'max_range'=>1000000]]);
        $limit=filter_var($query['per_page']??20,FILTER_VALIDATE_INT,['options'=>['min_range'=>1,'max_range'=>100]]);
        if($page===false||$limit===false)throw new ApiError(422,'Paginación inválida.');
        $suffix=$where?' WHERE '.implode(' AND ',$where):'';
        $total=(int)$this->run('SELECT COUNT(*) FROM `'.$d['table'].'`'.$suffix,$values)->fetchColumn();
        $rows=$this->run('SELECT '.$this->fields().' FROM `'.$d['table'].'`'.$suffix.' ORDER BY `'.$d['pk'].'` DESC LIMIT ? OFFSET ?',array_merge($values,[$limit,($page-1)*$limit]))->fetchAll();
        return ['data'=>$rows,'meta'=>['page'=>$page,'per_page'=>$limit,'total'=>$total,'last_page'=>max(1,(int)ceil($total/$limit))]];
    }
    public function validate(array $data,bool $complete): array {
        $rules=$this->definition['fields'];$out=[];$errors=[];
        foreach($data as $key=>$value) {
            if(!isset($rules[$key])) {$errors[$key]='Campo no permitido.';continue;}
            $r=$rules[$key];
            if($value===null && $r['nullable']){$out[$key]=null;continue;}
            if(!is_scalar($value)){$errors[$key]='Valor inválido.';continue;}
            if($r['type']==='integer') {
                if(filter_var($value,FILTER_VALIDATE_INT)===false){$errors[$key]='Debe ser un entero.';continue;}
                $value=(int)$value;
                if(($key==='estado' && !in_array($value,[0,1],true)) || ($key==='id' || substr($key,-3)==='_id') && $value<1){$errors[$key]='Valor fuera de rango.';continue;}
            } else {
                $value=(string)$value;
                if($r['required'] && trim($value)===''){$errors[$key]='Campo obligatorio.';continue;}
                if(strlen($value)>$r['max']){$errors[$key]='Texto demasiado largo.';continue;}
                if($r['type']==='date'){$d=\DateTimeImmutable::createFromFormat('!Y-m-d',$value);if(!$d||$d->format('Y-m-d')!==$value){$errors[$key]='Usa AAAA-MM-DD.';continue;}}
                if($key==='correo' && $value!=='' && !filter_var($value,FILTER_VALIDATE_EMAIL)){$errors[$key]='Correo inválido.';continue;}
            }
            $out[$key]=$value;
        }
        if($complete)foreach($rules as $key=>$r)if($r['required']&&!array_key_exists($key,$out))$errors[$key]='Campo obligatorio.';
        if($errors)throw new ApiError(422,'Revisa los datos enviados.',$errors);
        if(!$out)throw new ApiError(422,'No hay campos para guardar.');return $out;
    }
    public function insert(array $data): int {
        $keys=array_keys($data);$this->run('INSERT INTO `'.$this->definition['table'].'` (`'.implode('`,`',$keys).'`) VALUES ('.implode(',',array_fill(0,count($keys),'?')).')',array_values($data));return (int)$this->db->lastInsertId();
    }
    public function update(int $id,array $data): array {
        $this->one($id);$set=[];foreach($data as $key=>$v)$set[]='`'.$key.'`=?';
        $this->run('UPDATE `'.$this->definition['table'].'` SET '.implode(',',$set).' WHERE `'.$this->definition['pk'].'`=?',array_merge(array_values($data),[$id]));return $this->one($id);
    }
    public function delete(int $id): void {
        $this->one($id);
        $dependencies=[
            'carrrera'=>[['licenciados','carrrera_id'],['proyectos_defensa','carrrera_id'],['proyectos_repositorio','carrrera_id'],['pro_repositorio22','carrrera_id']],
            'cargo'=>[['usuario','cargo_id'],['estudiantes','cargo_id'],['administrativos','cargo_id']],
            'modalidad'=>[['proyectos_defensa','modalidad_id'],['proyectos_repositorio','modalidad_id'],['pro_repositorio22','modalidad_id']],
            'licenciados'=>[['proyectos_defensa','licenciados_id'],['pro_repositorio22','licenciados_id']],
            'estudiantes'=>[['usuario','estudiantes_id'],['proyectos_defensa','estudiantes_id']],
            'archivosinsta'=>[['proyectos_defensa','archivosinsta_id']],
            'etapas_instancia'=>[['proyectos_defensa','etapas_instancia_id']],
            'tipo_proyecto'=>[['proyectos_defensa','proyectoes_id']],
            'tipo_postulante'=>[['estudiantes','tipo_postulante_id']]
        ];
        foreach($dependencies[$this->definition['table']]??[] as [$table,$column]) {
            if($this->run('SELECT 1 FROM `'.$table.'` WHERE `'.$column.'`=? LIMIT 1',[$id])->fetchColumn())throw new ApiError(409,'El registro tiene datos relacionados y no puede eliminarse.');
        }
        $this->run('DELETE FROM `'.$this->definition['table'].'` WHERE `'.$this->definition['pk'].'`=?',[$id]);
    }
}
