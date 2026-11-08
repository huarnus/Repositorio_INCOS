<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class ProyectoModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre_lice FROM licenciados WHERE id = '$tutor'";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO pro_repositorio22 (titulo,descripcion,autor,tutor,gestion,fecha_publicacion,estado, ruta, tipo_documento, carrrera_id,modalidad_id) 
            VALUES ('$titulo','$descripcion', '$autor','$nombreLice','$gestion','$fecha_entrega_formato_correcto','1','$directorio', '$nombreArchivo', '$carrrera_id','$modalidad_id')";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM archivosinsta";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from carrrera";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from licenciados";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from modalidad";
    }

    public static function statement007(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombreCompleto FROM estudiantes WHERE id = '$estudianteId'";
    }

    public static function statement008(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.titulo,pd.descripcion,pd.tutor,pd.gestion,pd.fecha_entrega, pd.modalidad_id, pd.carrrera_id,pd.proyectoes_id,pd.etapas_instancia_id,pd.licenciados_id 
                              FROM proyectos_defensa pd
                              WHERE pd.estudiantes_id = '$estudianteId'";
    }

    public static function statement009(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre_lice FROM licenciados WHERE id = '$tutor'";
    }

    public static function statement010(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombreM FROM modalidad WHERE id = '$modalidadId'";
    }

    public static function statement011(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre_carrera FROM carrrera WHERE id = '$carreraId'";
    }

    public static function statement012(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT proyectoEs FROM tipo_proyecto WHERE id = '$proyectoes_id'";
    }

    public static function statement013(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT instancia FROM etapas_instancia WHERE id = '$etapas_instancia_id'";
    }

    public static function statement014(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO historial_proyectos (titulo, descripcion,gestion,fecha_entrega,estudiante_nombre, modalidad, carrera, tipo_proyecto, etapas_instancia,fecha_actualizacion,tutor) VALUES ('$titulo',' $descripcion','$gestion','$fecha_entrega','$nombreEstudiante', '$nombreModalidad', '$nombreCarrera','$nombreTipo','$nombreInstancia', NOW(),'$nombreLice')";
    }

    public static function statement015(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM archivosinsta WHERE estudiante = '$nombreEstudiante'";
    }

    public static function statement016(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM archivosinsta WHERE estudiante = '$nombreEstudiante'";
    }

    public static function statement017(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM proyectos_defensa WHERE id_pro = $id";
    }

    public static function statement018(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT id, nombre_lice, carrrera_id FROM licenciados WHERE carrrera_id = '$carreraId'";
    }

    public static function statement019(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre_carrera FROM carrrera WHERE id = '$carreraId'";
    }

    public static function statement020(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT id, titulo FROM archivosinsta WHERE estudiante = '$nombreUsuario'";
    }

    public static function statement021(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from carrrera";
    }

    public static function statement022(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from licenciados";
    }

    public static function statement023(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from modalidad";
    }

    public static function statement024(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM tipo_proyecto";
    }

    public static function statement025(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * from etapas_instancia WHERE instancia IN ('Predefensa', 'Defensa')";
    }

    public static function statement026(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO proyectos_defensa (titulo, estudiantes_id, descripcion, licenciados_id, gestion, fecha_entrega, modalidad_id, carrrera_id, proyectoes_id, archivosinsta_id, etapas_instancia_id, estado) 
VALUES ('$titulo', '$estudiantes_id', '$descripcion', '$licenciados_id', '$gestion', '$fecha_entrega_formato_correcto', '$modalidad_id', '$carrrera_id', '$proyectoes_id', '$archivosinsta_id', '$etapas_instancia_id', '1')";
    }

    public static function statement027(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE proyectos_defensa SET etapas_instancia_id = '$nuevaInstancia' WHERE id_pro = '$id_Pro'";
    }

    public static function statement028(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM etapas_instancia";
    }

    public static function statement029(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, pd.titulo as titulo,l.nombre_lice as liceN, e.nombreCompleto AS estudiante, c.nombre_carrera as carrera, m.nombreM as modalidad, t.proyectoEs, ei.id, ei.instancia
        FROM proyectos_defensa pd
        INNER JOIN estudiantes e ON pd.estudiantes_id = e.id
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        INNER JOIN tipo_proyecto t ON pd.proyectoes_id = t.id
        INNER JOIN licenciados l ON pd.licenciados_id  = l.id
        INNER JOIN etapas_instancia ei ON pd.etapas_instancia_id = ei.id";
    }

    public static function statement030(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from etapas_instancia";
    }

    public static function statement031(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera , m.nombreM 
    FROM pro_repositorio22 pd
     JOIN carrrera c ON pd.carrrera_id = c.id
     JOIN modalidad m ON pd.modalidad_id = m.id";
    }

    public static function statement032(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera , m.nombreM 
    FROM proyectos_repositorio pd
     JOIN carrrera c ON pd.carrrera_id = c.id
     JOIN modalidad m ON pd.modalidad_id = m.id";
    }

    public static function statement033(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE proyectos_repositorio SET estado = $estado WHERE id_repo = $id";
    }

    public static function statement034(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE pro_repositorio22 SET estado = $estado WHERE id = $id";
    }

    public static function statement035(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, e.nombreCompleto, ai.ruta, ai.tipo_documento
                    FROM proyectos_defensa pd
                    INNER JOIN estudiantes e ON pd.estudiantes_id = e.id
                    INNER JOIN archivosinsta ai ON pd.archivosinsta_id = ai.id
                    WHERE pd.id_pro = '$idProyecto'";
    }

    public static function statement036(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO proyectos_repositorio (titulo, autor, fecha_publicacion, ruta, tipo_documento) 
                                VALUES ('$titulo', '$estudiante_id', '$fechaActual', '$nuevaRuta', '$tipo_documento')";
    }

    public static function statement037(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, e.nombreCompleto,ai.ruta, ai.tipo_documento,l.nombre_lice
                    FROM proyectos_defensa pd
                    INNER JOIN licenciados l ON pd.licenciados_id = l.id
                    INNER JOIN estudiantes e ON pd.estudiantes_id = e.id
                    INNER JOIN archivosinsta ai ON pd.archivosinsta_id = ai.id
                    WHERE pd.id_pro = '$idProyecto'";
    }

    public static function statement038(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre_lice FROM licenciados WHERE id = '$tutor'";
    }

    public static function statement039(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombreM FROM modalidad WHERE id = '$modalidad_id'";
    }

    public static function statement040(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre_carrera FROM carrrera WHERE id = '$carrrera_id'";
    }

    public static function statement041(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT instancia FROM etapas_instancia WHERE id = '$instancia'";
    }

    public static function statement042(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT proyectoEs FROM tipo_proyecto WHERE id = '$proyectoes_id'";
    }

    public static function statement043(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO historial_proyectos (titulo, descripcion,gestion,fecha_entrega,estudiante_nombre, modalidad, carrera, tipo_proyecto, etapas_instancia,fecha_actualizacion,tutor) 
                            VALUES ('$titulo',' $descripcion','$año_actual','$fechaActual','$estudiantes_id', '$nombreModalidad', '$nombreCarrera','$nombreTipo','$nombreInstancia', NOW(),'$nombreLice')";
    }

    public static function statement044(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO proyectos_repositorio (titulo, descripcion, tutor,autor, gestion, fecha_publicacion, ruta, tipo_documento ,modalidad_id,carrrera_id,estado) 
                            VALUES ('$titulo', '$descripcion', '$tutor2', '$estudiantes_id','$año_actual', '$fechaActual', '$rutaNuevaCompleta', '$tipo_documento','$modalidad_id','$carrrera_id','1')";
    }

    public static function statement045(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM archivosinsta WHERE id = '$archivoId'";
    }

    public static function statement046(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE proyectos_defensa pd
          SET etapas_instancia_id = (SELECT id FROM etapas_instancia WHERE instancia = '$nuevaInstancia')
          WHERE pd.id_pro = $id_pro";
    }

    public static function statement047(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM archivoinsta
                                WHERE estudiante_id IN (SELECT estudiantes_id FROM proyectos_defensa WHERE id_pro = $id_pro)
                                AND instancia = '$nuevaInstancia'";
    }

}
