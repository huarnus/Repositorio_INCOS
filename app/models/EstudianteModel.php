<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class EstudianteModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE estudiantes SET 
nombreAp='$nombreAp',
carnet='$carnet'
WHERE id = $id;
";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM estudiantes WHERE id = $id";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM estudiantes WHERE id = $id";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT e.*, ca.nombre as nombre,
                            CONCAT(e.nombreCompleto) AS nombreEstudiante
                     FROM estudiantes e
                     INNER JOIN cargo ca ON e.cargo_id = ca.id
                     ";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE estudiantes set estado = '0' WHERE id='$id'";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE estudiantes set estado = '0' WHERE id='$id'";
    }

    public static function statement007(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM estudiantes WHERE carnet = '$carnet'";
    }

    public static function statement008(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO estudiantes (nombreCompleto, carnet, extencion, celular, año_egreso, correo, estado, cargo_id) 
        VALUES ('$nombreCompleto', '$carnet', '$extencion', '$celular', '$año_egreso', '$correo', '1', '$cargo_id')";
    }

    public static function statement009(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO usuario (nombre, usuario, contraseña, cargo_id, estudiantes_id) 
        VALUES ('$nombreCompleto', '$nombreUsuario', '$contraseña', '$cargo_id', '$estudiante_id')";
    }

    public static function statement010(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM estudiantes WHERE carnet = '$carnet'";
    }

    public static function statement011(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO estudiantes (nombreCompleto, carnet, extencion, celular, año_egreso, correo, estado, cargo_id) 
        VALUES ('$nombreCompleto', '$carnet', '$extencion', '$celular', '$año_egreso', '$correo', '1', '$cargo_id')";
    }

    public static function statement012(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO usuario (nombre, usuario, contraseña, cargo_id, estudiantes_id) 
        VALUES ('$nombreCompleto', '$usuario', '$contraseña', '$cargo_id', '$estudiante_id')";
    }

    public static function statement013(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM estudiantes WHERE id = $id";
    }

}
