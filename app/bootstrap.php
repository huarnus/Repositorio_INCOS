<?php
if (!defined('MVC_ROOT')) {
    define('MVC_ROOT', dirname(__DIR__));
    spl_autoload_register(function ($class) {
        $prefix = 'Incos\\Models\\';
        if (strncmp($class, $prefix, strlen($prefix)) === 0) {
            $file = MVC_ROOT . '/app/models/' . substr($class, strlen($prefix)) . '.php';
            if (is_file($file)) { require_once $file; }
        }
    });
}
