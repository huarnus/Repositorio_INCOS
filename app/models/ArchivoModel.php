<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class ArchivoModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM archivosinsta WHERE id = $id";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM archivosinsta WHERE estudiante = '$estudiante'";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO archivosinsta (titulo, ruta, tipo_documento, estudiante) 
            VALUES ('$titulo', '$directorio', '$nombreArchivo', '$estudiante')";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO archivosinsta (titulo, ruta, tipo_documento, estudiante) 
            VALUES ('$titulo', '$directorio', '$nombreArchivo', '$estudiante')";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT id, estudiante, GROUP_CONCAT( tipo_documento SEPARATOR ' / ') AS tipos_documento, titulo FROM archivosinsta GROUP BY estudiante";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM archivosinsta WHERE estudiante = '$nombreUsuario'";
    }

}
