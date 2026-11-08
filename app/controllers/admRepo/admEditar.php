<?php
/* Controlador compatible con la URL original: admRepo/admEditar.php */

include(MVC_ROOT . '/admRepo/partir/check.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');
include(MVC_ROOT . '/admRepo/partir/arriba.php');

$id=$_GET['id'];
///////////// obtiene los administrativos ///////////////
$consulta=\Incos\Models\GestionModel::statement001(get_defined_vars());
$resultado=\Incos\Models\DatabaseModel::query($con, $consulta);
$adm=\Incos\Models\DatabaseModel::fetch_array($resultado);

///////////// obtiene las cargos ///////////////
$consultaC=\Incos\Models\GestionModel::statement002(get_defined_vars());
$resultadoC=\Incos\Models\DatabaseModel::query($con, $consultaC);


require MVC_ROOT . '/app/views/admRepo/admEditar/001.php';
while($categoria=\Incos\Models\DatabaseModel::fetch_array($resultadoC)){ 
require MVC_ROOT . '/app/views/admRepo/admEditar/004.php';
if($categoria['id']==$adm['cargo_id']){ require MVC_ROOT . '/app/views/admRepo/admEditar/007.php';
}
require MVC_ROOT . '/app/views/admRepo/admEditar/008.php';
} 
require MVC_ROOT . '/app/views/admRepo/admEditar/011.php';
include(MVC_ROOT . '/admRepo/partir/abajo.php');

