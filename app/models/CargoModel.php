<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class CargoModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE cargo SET 
nombre='$nombre'
WHERE id = $id;
";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM cargo WHERE id = $id";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT cargo (nombre) 
    VALUES ('$nombre')";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo
         WHERE nombre = 'Directora' OR nombre = 'Secretario'";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo WHERE id = $id";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo
        WHERE nombre = 'Estudiante' OR nombre = 'Egresado'";
    }

}
