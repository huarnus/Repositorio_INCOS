# Pruebas de compatibilidad

`render_con_datos_simulados.php` es una herramienta de terminal para comparar
una pantalla del original con su versión MVC sin usar una base de datos real.
Define dobles de MySQLi, por lo que se ejecuta con `php -n`, sin cargar MySQLi.
Recibe: raíz absoluta de la aplicación, ruta PHP y archivo JSON de traza.
Los datos son ficticios. No valida permisos reales, transacciones, uploads,
reCAPTCHA ni la generación completa de reportes PDF.

Ejemplo (ajustar rutas):

```bash
php -n render_con_datos_simulados.php /ruta/repositorio_mvc index.php traza.json
```

El resultado de la prueba realizada durante la conversión está en
`resultados_render.json`. Los recursos y PDF originales se comprobaron mediante
SHA-256; la revisión de sintaxis usó PHP 8.3.6.
