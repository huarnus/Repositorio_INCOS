<?php
/* Controlador compatible con la URL original: admRepo/estudiantesgrabar.php */
 
include(MVC_ROOT . '/admRepo/partir/conexion.php');

// Verificar reCAPTCHA
$secretKey = "6LdgBhMpAAAAAJMuC07rDvue2H7sMaTIttyL7JsY"; // Reemplaza con tu clave privada
$response = $_POST['g-recaptcha-response'];

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$response}");
$responseData = json_decode($verify);

if (!$responseData->success) {
    // Si la verificación falla, redirige o muestra un mensaje de error
    header("Location: ../registroEstudiantes.php?sw=6000");
    exit();
}
$paterno = ucwords(strtolower($_POST['paterno']));
$materno = ucwords(strtolower($_POST['materno']));
$nombre = ucwords(strtolower($_POST['nombre']));
$carnet = $_POST['carnet'];
$extencion = $_POST['extencion'];
$cargo_id = $_POST['cargo_id'];
$celular = $_POST['celular'];
$año_egreso = $_POST['año_egreso'];
$correo = strtolower($_POST['correo']);

$usuario = $_POST['usuario'];


// Verificar que el número de carné tenga entre 6 y 10 dígitos
if (strlen($carnet) < 6 || strlen($carnet) > 10) {
    header("Location: ../registroEstudiantes.php?sw=2000");
} else {

    // Verificar si el número de carné ya existe en la tabla estudiantes
    $queryVerificarCarnet = \Incos\Models\EstudianteModel::statement010(get_defined_vars());
    $resultadoVerificarCarnet = \Incos\Models\DatabaseModel::query($con, $queryVerificarCarnet);

    if (\Incos\Models\DatabaseModel::num_rows($resultadoVerificarCarnet) > 0) {
        // El número de carné ya existe, muestra un mensaje de error o realiza alguna acción
        header("Location: ../registroEstudiantes.php?sw=1000");
    } else {
        // Tanto el número de carné como el correo son válidos, puedes continuar con la inserción de datos

        // Generar un hash de la contraseña
        $contraseña = password_hash($carnet, PASSWORD_BCRYPT);

        // Insertar en la tabla estudiantes
        $nombreCompleto = $paterno . ' ' . $materno . ' ' . $nombre;
        $query = \Incos\Models\EstudianteModel::statement011(get_defined_vars());
        \Incos\Models\DatabaseModel::query($con, $query) or die("ERROR AL GUARDAR: " . \Incos\Models\DatabaseModel::error($con));

        // Obtener el ID del estudiante insertado
        $estudiante_id = \Incos\Models\DatabaseModel::insert_id($con);

        // Insertar en la tabla usuarios con el estudiante_id asociado
        $queryUsuarios = \Incos\Models\EstudianteModel::statement012(get_defined_vars());
        \Incos\Models\DatabaseModel::query($con, $queryUsuarios) or die("ERROR AL GUARDAR EN USUARIOS: " . \Incos\Models\DatabaseModel::error($con));

        header("Location: ../registroEstudiantes.php?sw=3000");
    }
}

require MVC_ROOT . '/app/views/admRepo/estudiantesgrabar/001.php';
