<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class GestionModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM administrativos WHERE id=$id";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM administrativos WHERE id=$id";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT administrativos (nombreCompleto, carnet, correo, estado, cargo_id) VALUES 
('$nombreCompleto', '$carnet', '$correo', '1', '$cargo_id')";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "INSERT INTO usuario (nombre, usuario, contraseña, cargo_id, estado) 
VALUES ('$nombreCompleto', '$usuario', '$contraseña', '$cargo_id', '1')";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT a.id,a.nombreCompleto,a.carnet,a.correo,c.nombre as nombrec
        FROM administrativos a
        INNER JOIN cargo c ON a.cargo_id=c.id
        LEFT JOIN usuario u ON a.id = u.id
        WHERE c.nombre = 'Directora' OR c.nombre = 'Secretario'
        ";
    }

    public static function statement007(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo";
    }

    public static function statement008(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo WHERE nombre IN ( 'Directora','Secretario')";
    }

    public static function statement009(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "DELETE FROM empleado WHERE id_empleado = $id";
    }

    public static function statement010(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT h.*  FROM historial_proyectos h";
    }

    public static function statement011(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT c.nombre as nombre_cargo, COUNT(e.cargo_id) as cantidad_estudiantes
FROM estudiantes e
JOIN cargo c ON e.cargo_id  = c.id
WHERE c.nombre = 'Estudiante'
GROUP BY e.cargo_id";
    }

    public static function statement012(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT c.nombre as nombre_cargo, COUNT(e.cargo_id) as cantidad_egresados
FROM estudiantes e
JOIN cargo c ON e.cargo_id = c.id
WHERE c.nombre = 'Egresado'
GROUP BY e.cargo_id";
    }

    public static function statement013(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, e.extencion,e.año_egreso,e.correo,l.nombre_lice, e.nombreCompleto AS nombreEstudiante, e.carnet,e.celular, c.nombre_carrera,m.nombreM,t.proyectoEs,ei.instancia 
                    FROM proyectos_defensa pd
              INNER JOIN estudiantes e ON pd.estudiantes_id = e.id
							INNER JOIN carrrera c ON pd.carrrera_id = c.id
							INNER JOIN modalidad m ON pd.modalidad_id = m.id
							INNER JOIN tipo_proyecto t ON pd.proyectoes_id = t.id
              INNER JOIN licenciados l ON pd.licenciados_id = l.id
							INNER JOIN etapas_instancia ei ON pd.etapas_instancia_id = ei.id
                            WHERE e.nombreCompleto = '$nombreUsuario'";
    }

    public static function statement014(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM archivosinsta WHERE estudiante = '$nombreUsuario'";
    }

    public static function statement015(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT id, contraseña, cargo_id,estado FROM usuario WHERE usuario='$usuario'";
    }

    public static function statement016(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre FROM cargo WHERE id = $estado_usuario_id";
    }

    public static function statement017(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM empleado WHERE id_empleado = $id";
    }

    public static function statement018(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM usuario WHERE usuario='$usuario'";
    }

    public static function statement019(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT nombre FROM cargo WHERE id = $cargo_id";
    }

    public static function statement020(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT titulo FROM archivosinsta WHERE titulo = titulo";
    }

}
