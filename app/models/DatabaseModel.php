<?php
namespace Incos\Models;

/** Adaptador MySQLi. Mantiene tipos, resultados y transacciones existentes. */
final class DatabaseModel
{
    public static function connectConfigured()
    {
        $settings = require MVC_ROOT . '/config/database.php';
        return mysqli_connect($settings['host'], $settings['user'], $settings['password'], $settings['database'], $settings['port'] ?? 3306);
    }

    public static function __callStatic($name, $arguments)
    {
        $function = 'mysqli_' . $name;
        if (!function_exists($function)) {
            throw new \RuntimeException('Se requiere la extensión mysqli: ' . $function);
        }
        return $function(...$arguments);
    }
}
