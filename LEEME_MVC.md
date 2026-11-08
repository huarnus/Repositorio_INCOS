# Repositorio INCOS — estructura MVC compatible

Esta copia reorganiza el proyecto PHP original sin modificar sus hojas de estilo,
imágenes, PDF, enlaces públicos ni estructura SQL. No requiere Laravel, Composer
ni un proceso de compilación. La base de datos existente se conserva.

## Instalación en XAMPP

1. Haz una copia de tu carpeta original y un respaldo de la base de datos.
2. Extrae esta carpeta `repositorio` en `C:\xampp\htdocs\repositorio_mvc`.
3. Inicia Apache y MySQL en XAMPP.
4. Si ya tienes la base `repositorio`, úsala sin volver a importar el SQL.
   Para una instalación nueva, crea la base e importa `repositorio.sql` en phpMyAdmin.
   El volcado incluido es el del archivo entregado, no una copia de tu servidor actual.
5. Ajusta `config/database.php` si tu usuario, contraseña o base son diferentes.
6. Abre `http://localhost/repositorio_mvc/`.
7. El acceso administrativo sigue en `http://localhost/repositorio_mvc/admRepo/`.

No ejecutes la importación sobre una base con datos sin revisar primero el respaldo.

## Organización

| Ubicación | Responsabilidad |
| --- | --- |
| Archivos PHP originales | Entradas de compatibilidad: cargan el arranque y el controlador. |
| app/bootstrap.php | Define la raíz y carga automáticamente los modelos. |
| app/controllers/ | Recepción de datos, sesión, decisiones, ciclos, archivos y redirecciones. |
| app/models/ | Consultas por módulo y adaptador MySQLi. |
| app/views/ | Fragmentos de pantalla y salida, incluidos los valores dinámicos. |
| config/database.php | Configuración compartida de conexión. |
| app/migration-map.json | Relación exacta entre URL, controlador, modelo y vistas. |

Los controladores conservan el estilo procedural del sistema. Las vistas se dividen
en fragmentos numerados para conservar el orden de salida dentro de bucles y
condiciones, incluidos HTML, CSS y JavaScript que estaban incrustados en las páginas.
`require` comparte las variables del controlador con la vista.

Los modelos CarreraModel, CargoModel, ModalidadModel, EstudianteModel, UsuarioModel,
ProyectoModel, ArchivoModel y TutorModel agrupan las consultas; PublicoModel y
GestionModel cubren las operaciones restantes. DatabaseModel centraliza MySQLi.
Los métodos `statementNNN` reciben el contexto existente y devuelven el SQL original.
Es una separación MVC de compatibilidad, no un rediseño de entidades con ORM.

## Ejemplo: lista de carreras

1. El navegador solicita `admRepo/carreraListar.php`.
2. Esa entrada carga `app/bootstrap.php` y el controlador con el mismo nombre.
3. El controlador comprueba la sesión y solicita el SQL a CarreraModel.
4. DatabaseModel ejecuta la consulta y devuelve el resultado MySQLi original.
5. El controlador recorre los registros e incluye las vistas de
   `app/views/admRepo/carreraListar/`.
6. El navegador utiliza las mismas clases CSS, imágenes y enlaces que antes.

Para cambiar una consulta, consulta el método indicado en el controlador.
Para cambiar un texto, busca el texto en las vistas de esa pantalla.
Para cambiar validaciones o redirecciones, edita el controlador correspondiente.

## Qué se conserva y qué no se ha rediseñado

- Se mantienen tablas, datos del volcado, archivos PDF, recursos y bibliotecas.
- Los reportes PDF personalizados y las bibliotecas TCPDF/FPDF/FPDI conservan su
  implementación original y utilizan los puntos de conexión compatibles.
- Se omiten únicamente metadatos `.git` incluidos dentro de una biblioteca.
- Se corrigieron cuatro referencias de inclusión a archivos de conexión o FPDI.
  Los scripts heredados de reportes de cargo/cliente también referencian archivos
  `modelo/` ausentes en la entrega original; esos ejemplos siguen requiriendo
  sus dependencias originales.
- Esta reorganización no resuelve por sí sola las vulnerabilidades originales:
  SQL interpolado, permisos incompletos, contraseña en sesión, cookies de acceso,
  validación de archivos y falta de CSRF siguen requiriendo una revisión separada.
- Los scripts heredados de empleados hacen referencia a una tabla `empleado` que
  no forma parte del SQL entregado; no se ha inventado ese módulo ni esa tabla.
- Las integraciones externas (reCAPTCHA, correo y recursos CDN) dependen de la
  configuración y conectividad del entorno original.

## Comprobación en tu equipo

Con PHP de XAMPP disponible en la terminal, ejecuta desde esta carpeta:

```powershell
Get-ChildItem app,config -Recurse -Filter *.php | ForEach-Object { & C:\xampp\php\php.exe -l $_.FullName }
```

Después prueba: inicio público y filtros, registro y reCAPTCHA, ingreso por cada
cargo, listado y edición de carreras/modalidades, carga y descarga de PDF,
registro y cambio de etapa, publicación de una copia de prueba y reportes.
Compara cada pantalla con la versión original. Usa una base de pruebas al
comprobar eliminaciones y publicación, ya que modifican datos y mueven archivos.

La comprobación de conservación, sintaxis y salida con datos simulados se describe en `VALIDACION_MVC.md`.
