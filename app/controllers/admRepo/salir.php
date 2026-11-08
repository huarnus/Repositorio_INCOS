<?php
/* Controlador compatible con la URL original: admRepo/salir.php */
require MVC_ROOT . '/app/views/admRepo/salir/001.php';

session_start();
session_destroy();
header("Location: index.php?sw=3");

