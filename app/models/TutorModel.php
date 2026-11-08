<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class TutorModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT a.*, c.nombre_carrera as nombrec
            FROM licenciados a 
            INNER JOIN carrrera c ON a.carrrera_id=c.id
            LIMIT $inicio, $resultados_por_pagina";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM licenciados WHERE id=$id";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM carrrera";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM licenciados WHERE id=$id";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT COUNT(*) as count FROM licenciados WHERE nombre_lice = '$nombre' AND carrrera_id = '$carrrera_id'";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO licenciados (nombre_lice, carrrera_id) VALUES ('$nombre', '$carrrera_id')";
    }

    public static function statement007(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM licenciados";
    }

    public static function statement008(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT a.*, c.nombre_carrera as nombrec
                FROM licenciados a 
                INNER JOIN carrrera c ON a.carrrera_id=c.id
                LIMIT $inicio, $resultados_por_pagina";
    }

    public static function statement009(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM licenciados";
    }

    public static function statement010(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE licenciados SET 
nombre_lice = '$nombre_lice',
carrrera_id = '$carrrera_id'
-- carnet = '$carnet'
WHERE id = $id;
";
    }

    public static function statement011(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM carrrera";
    }

    public static function statement012(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM carrrera ";
    }

}
