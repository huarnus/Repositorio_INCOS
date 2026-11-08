<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class UsuarioModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE usuario SET estado = $estado WHERE id = $id";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM usuario WHERE id = $id";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM usuario WHERE id = $id";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from cargo";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "UPDATE usuarios set estado = 'Inactivo' WHERE id='$id'";
    }

    public static function statement007(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO usuarios (usuario, contraseña, correo, carnet) 
VALUES ('$usuario', '$contraseña', '$correo', '$carnet')";
    }

    public static function statement008(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT u.id,u.nombreAp,u.carnet,u.usuario,u.estado,c.cargo 
        FROM usuarios u INNER JOIN cargo c ON u.cargo_id=c.id where estado = 'Inactivo' and cargo= 'Administracion'";
    }

    public static function statement009(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT u.id,u.nombreAp,u.carnet,u.usuario,u.estado,c.cargo 
        FROM usuarios u INNER JOIN cargo c ON u.cargo_id=c.id 
        where estado = 'Inactivo' and cargo= 'estudiantes'";
    }

    public static function statement010(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT u.id,u.nombre,u.usuario,u.estado,c.nombre as nombreC, e.carnet,e.id as id_es, e.extencion,e.celular,e.correo
        FROM usuario u 
        INNER JOIN estudiantes e ON u.estudiantes_id=e.id
        INNER JOIN cargo c ON u.cargo_id=c.id
        ";
    }

    public static function statement011(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT u.id,u.nombre,u.usuario,u.estado,c.nombre as nombreC
        FROM usuario u 
        INNER JOIN cargo c ON u.cargo_id=c.id
        WHERE c.nombre = 'Directora' OR c.nombre = 'Secretario'
        ";
    }

    public static function statement012(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT u.id,u.nombreAp,u.carnet,u.usuario,u.estado,c.cargo 
        FROM usuarios u INNER JOIN cargo c ON u.cargo_id=c.id where  estado = 'Activo' and cargo = 'Administracion'";
    }

}
