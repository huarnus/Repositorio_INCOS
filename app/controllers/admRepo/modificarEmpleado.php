<?php
/* Controlador compatible con la URL original: admRepo/modificarEmpleado.php */
 
include(MVC_ROOT . '/admRepo/partir/conexion.php');
$id=$_GET['cod'];
$consulta = \Incos\Models\GestionModel::statement017(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con,$consulta);
$dato = \Incos\Models\DatabaseModel::fetch_array($resultado);


require MVC_ROOT . '/app/views/admRepo/modificarEmpleado/001.php';
if($dato['genero'=="Masculino"]) {require MVC_ROOT . '/app/views/admRepo/modificarEmpleado/022.php';
}
require MVC_ROOT . '/app/views/admRepo/modificarEmpleado/023.php';
 if($dato['genero'=="Femenino"]) {require MVC_ROOT . '/app/views/admRepo/modificarEmpleado/024.php';
}
require MVC_ROOT . '/app/views/admRepo/modificarEmpleado/025.php';
