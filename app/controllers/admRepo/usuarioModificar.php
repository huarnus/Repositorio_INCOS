<?php
/* Controlador compatible con la URL original: admRepo/usuarioModificar.php */

include(MVC_ROOT . '/admRepo/partir/check.php'); 
include(MVC_ROOT . '/admRepo/partir/arriba.php');
include(MVC_ROOT . '/admRepo/partir/conexion.php');

$id=$_GET['cod'];
//obtiene todo los datos de usuario
$consulta = \Incos\Models\UsuarioModel::statement003(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con,$consulta);
$dato = \Incos\Models\DatabaseModel::fetch_array($resultado);

///////////// obtiene los cargos ///////////////
$consultaC=\Incos\Models\UsuarioModel::statement004(get_defined_vars());
$resultadoC=\Incos\Models\DatabaseModel::query($con, $consultaC);


require MVC_ROOT . '/app/views/admRepo/usuarioModificar/001.php';
while($cargo=\Incos\Models\DatabaseModel::fetch_array($resultadoC)){ 
require MVC_ROOT . '/app/views/admRepo/usuarioModificar/004.php';
if($cargo['id']==$dato['cargo_id']){ require MVC_ROOT . '/app/views/admRepo/usuarioModificar/007.php';
}
require MVC_ROOT . '/app/views/admRepo/usuarioModificar/008.php';
} 
require MVC_ROOT . '/app/views/admRepo/usuarioModificar/011.php';
include(MVC_ROOT . '/admRepo/partir/abajo.php');
    
