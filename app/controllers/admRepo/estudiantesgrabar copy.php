<?php
/* Controlador compatible con la URL original: admRepo/estudiantesgrabar copy.php */
 
include(MVC_ROOT . '/admRepo/partir/conexion.php');

$paterno = ucwords(strtolower($_POST['paterno']));
$materno = ucwords(strtolower($_POST['materno']));
$nombre = ucwords(strtolower($_POST['nombre']));
$carnet = $_POST['carnet'];
$extencion = $_POST['extencion'];
$cargo_id = $_POST['cargo_id'];
$celular = $_POST['celular'];
$año_egreso = $_POST['año_egreso'];
$correo = $_POST['correo'];


// Verificar que el número de carné tenga entre 6 y 10 dígitos
if (strlen($carnet) < 6 || strlen($carnet) > 10) {
    header("Location: ../registroEstudiantes.php?sw=2000");
} else {

    // Verificar si el número de carné ya existe en la tabla estudiantes
    $queryVerificarCarnet = \Incos\Models\EstudianteModel::statement007(get_defined_vars());
    $resultadoVerificarCarnet = \Incos\Models\DatabaseModel::query($con, $queryVerificarCarnet);

    if (\Incos\Models\DatabaseModel::num_rows($resultadoVerificarCarnet) > 0) {
        // El número de carné ya existe, muestra un mensaje de error o realiza alguna acción
        header("Location: ../registroEstudiantes.php?sw=1000");
    } else {
        // Tanto el número de carné como el correo son válidos, puedes continuar con la inserción de datos

        // Generar un hash de la contraseña
        $contraseña = password_hash($carnet, PASSWORD_BCRYPT);

        // Obtener la primera letra del apellido paterno y el primer nombre completo
        $primeraLetraApellido = substr($paterno, 0, 1);
        $primerNombre = strtok($nombre, " ");
        // Concatenar la primera letra del apellido paterno y el primer nombre para el nombre de usuario
        $nombreUsuario = strtoupper($primeraLetraApellido . $primerNombre);

        // Insertar en la tabla estudiantes
        $nombreCompleto = $paterno . ' ' . $materno . ' ' . $nombre;
        $query = \Incos\Models\EstudianteModel::statement008(get_defined_vars());
        \Incos\Models\DatabaseModel::query($con, $query) or die("ERROR AL GUARDAR: " . \Incos\Models\DatabaseModel::error($con));

        // Obtener el ID del estudiante insertado
        $estudiante_id = \Incos\Models\DatabaseModel::insert_id($con);

        // Insertar en la tabla usuarios con el estudiante_id asociado
        $queryUsuarios = \Incos\Models\EstudianteModel::statement009(get_defined_vars());
        \Incos\Models\DatabaseModel::query($con, $queryUsuarios) or die("ERROR AL GUARDAR EN USUARIOS: " . \Incos\Models\DatabaseModel::error($con));

        header("Location: ../registroEstudiantes.php?sw=3000");
    }
}

require MVC_ROOT . '/app/views/admRepo/estudiantesgrabar copy/001.php';
