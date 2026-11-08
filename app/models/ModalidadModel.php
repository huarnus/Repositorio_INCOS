<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class ModalidadModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE modalidad SET
nombreM='$nombreM'
WHERE id=$id;
";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM modalidad WHERE id=$id";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM modalidad WHERE id=$id";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO modalidad SET

nombreM='$nombreM';
";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM   modalidad";
    }

}
