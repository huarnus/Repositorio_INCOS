<?php
namespace Incos\Models;

/** Consultas del módulo; conserva el SQL del sistema original. */
final class PublicoModel
{
    public static function statement001(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement002(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement003(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement004(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
             INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement005(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement006(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement007(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement008(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Comercio Internacional'
        AND pd.estado = '1'";
    }

    public static function statement009(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement010(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement011(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement012(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
             INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement013(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement014(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement015(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement016(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Contaduria General'
        AND pd.estado = '1'";
    }

    public static function statement017(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement018(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement019(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement020(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
             INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement021(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement022(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement023(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement024(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Secretariado Ejecutivo'
        AND pd.estado = '1'";
    }

    public static function statement025(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement026(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement027(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement028(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
             INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement029(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement030(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement031(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement032(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND c.nombre_carrera = 'Sistemas Informaticos'
        AND pd.estado = '1'";
    }

    public static function statement033(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from carrrera";
    }

    public static function statement034(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from modalidad";
    }

    public static function statement035(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT proyectos_repositorio.*, carrrera.nombre_carrera AS nombre_carrera, modalidad.nombreM AS nombre_modalidad 
           FROM proyectos_repositorio
           INNER JOIN carrrera ON proyectos_repositorio.carrrera_id = carrrera.id
           INNER JOIN modalidad ON proyectos_repositorio.modalidad_id = modalidad.id
           WHERE estado = '1'";
    }

    public static function statement036(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pro_repositorio22.*, carrrera.nombre_carrera AS nombre_carrera, modalidad.nombreM AS nombre_modalidad 
           FROM pro_repositorio22
           INNER JOIN carrrera ON pro_repositorio22.carrrera_id = carrrera.id
           INNER JOIN modalidad ON pro_repositorio22.modalidad_id = modalidad.id
           WHERE estado = '1'";
    }

    public static function statement037(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND pd.estado = '1'";
    }

    public static function statement038(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Proyecto de Grado'
        AND pd.estado = '1'";
    }

    public static function statement039(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
             INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND pd.estado = '1'";
    }

    public static function statement040(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
             INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Sociocomunitario Productivo'
        AND pd.estado = '1'";
    }

    public static function statement041(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND pd.estado = '1'";
    }

    public static function statement042(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Emprendimiento Productivo'
        AND pd.estado = '1'";
    }

    public static function statement043(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM proyectos_repositorio pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND pd.estado = '1'";
    }

    public static function statement044(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT pd.*, c.nombre_carrera as carrera, m.nombreM as modalidad
        FROM pro_repositorio22 pd
     
        INNER JOIN carrrera c ON pd.carrrera_id = c.id
        INNER JOIN modalidad m ON pd.modalidad_id = m.id
        WHERE m.nombreM  = 'Trabajo Dirigido Externo'
        AND pd.estado = '1'";
    }

    public static function statement045(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from carrrera";
    }

    public static function statement046(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from modalidad";
    }

    public static function statement047(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM usuario WHERE usuario='$usuario'";
    }

    public static function statement048(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from carrrera";
    }

    public static function statement049(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from modalidad";
    }

    public static function statement050(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from proyectoes";
    }

    public static function statement051(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "select * from instancias";
    }

    public static function statement052(array $__mvcScope): string
    {
        extract($__mvcScope, EXTR_SKIP);
        return "SELECT * FROM cargo WHERE nombre IN ('Estudiante', 'Egresado')";
    }

}
