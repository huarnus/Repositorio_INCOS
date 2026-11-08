<?php
/* Controlador compatible con la URL original: admRepo/login.php */

session_start();

include(MVC_ROOT . '/admRepo/partir/conexion.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
// Obtener el hash de la contraseña almacenada en la base de datos y el estado del usuario
$consulta = \Incos\Models\GestionModel::statement015(get_defined_vars());
$resultado = \Incos\Models\DatabaseModel::query($con, $consulta);
$filas = \Incos\Models\DatabaseModel::num_rows($resultado);

if ($filas == 1) {
    $fila = \Incos\Models\DatabaseModel::fetch_assoc($resultado);
    $contraseña_hash = $fila['contraseña'];
    $estado_usuario_id = $fila['cargo_id'];
    $estado = $fila['estado'];

    // Verificar el estado y cargo_id del usuario
    if ($estado == 0) {
        header("Location: index.php?sw=10"); // Usuario desactivado o con cargo desactivado, no puede ingresar
        exit;
    }

    // Obtener el nombre del estado del usuario desde la tabla cargo
    $consulta_estado = \Incos\Models\GestionModel::statement016(get_defined_vars());
    $resultado_estado = \Incos\Models\DatabaseModel::query($con, $consulta_estado);
    $fila_estado = \Incos\Models\DatabaseModel::fetch_assoc($resultado_estado);
    $estado_usuario = $fila_estado['nombre'];

    // Verificar la contraseña utilizando password_verify
    if (password_verify($contraseña, $contraseña_hash)) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contraseña'] = $contraseña;

        if (isset($_POST['recordar'])) {
            setcookie('recordar_usuario', $usuario, time() + 3600);
            setcookie('recordar_contraseña', $contraseña_hash, time() + 3600);
        } else {
            setcookie('recordar_usuario', '', time() + 3600);
            setcookie('recordar_contraseña', '', time() + 3600);
        }

        if ($estado_usuario == 'Estudiante' || $estado_usuario == 'Egresado') {
            // Verificar si el usuario ya ha iniciado sesión previamente
            if (isset($_SESSION['iniciado']) && $_SESSION['iniciado']) {
                header("Location: inicio.php"); // Redirige a la página de inicio para estudiantes y egresados
            } else {
                // Marcar al usuario como iniciado y redirigir
                $_SESSION['iniciado'] = true;
                header("Location: archivosRegistrar.php"); // Redirige a archivosRegistrar.php para estudiantes y egresados
            }
        } elseif ($estado_usuario == 'Secretario'|| $estado_usuario == 'Directora') {
            // Redirigir a la página de inicio para administrativos
            header("Location: inicio.php");
        }
        exit; // Termina la ejecución del script
    } else {
        header("Location: index.php?sw=2"); // Contraseña incorrecta
        exit;
    }
} else {
    header("Location: index.php?sw=2"); // Usuario no encontrado
    exit;
}

