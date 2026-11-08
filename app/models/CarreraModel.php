<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class CarreraModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE carrrera SET
nombre_carrera='$nombre_carrera'
WHERE id=$id;
";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM carrrera WHERE id=$id";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM carrrera WHERE id=$id";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO carrrera SET
nombre_carrera='$nombre_carrera';
";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM  carrrera";
    }

}
