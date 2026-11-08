<?php
/* Controlador compatible con la URL original: admRepo/cargoGrabar.php */
 
    include(MVC_ROOT . '/admRepo/partir/conexion.php');
    $nombre=$_POST['nombre'];

    $query=\Incos\Models\CargoModel::statement003(get_defined_vars());

    \Incos\Models\DatabaseModel::query($con,$query) or die("ERROR AL GUARDAR: " .\Incos\Models\DatabaseModel::error($con));
    header("Location: cargoLista.php?");

