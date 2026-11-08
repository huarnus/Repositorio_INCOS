# Repositorio INCOS — API REST y pantallas existentes

Esta entrega añade una API HTTP JSON versionada a la versión MVC. Se conservan
los estilos, imágenes, clases CSS, menús y pantallas originales. Una API organiza
el intercambio de datos; por sí sola no cambia la apariencia del sitio.

## 1. Instalar en XAMPP

1. Respalda tu carpeta y base de datos actuales.
2. Extrae la carpeta `repositorio` de este ZIP y renómbrala a `repositorio_api`.
3. Colócala en `C:\xampp\htdocs\repositorio_api`.
4. Inicia Apache y MySQL. Usa PHP 8.1 o posterior, con `pdo_mysql`, `mysqli`,
   `fileinfo`, `openssl` y sesiones habilitados. La comprobación se hizo con PHP 8.3.
5. Ajusta `config/database.php`: servidor, puerto, usuario, contraseña y base.
   Los valores iniciales son localhost:3306, root, contraseña vacía y repositorio.
6. Si ya tienes tu base de datos, úsala: no vuelvas a importar el SQL.
   Para una instalación nueva, crea `repositorio` e importa `repositorio.sql`.
7. Abre `http://localhost/repositorio_api/` y el panel en
   `http://localhost/repositorio_api/admRepo/`.

El archivo SQL entregado se conserva sin cambios. No se crean tablas nuevas.
Los directorios de documentos deben permitir escritura al usuario de Apache.
`config/api.php` conserva la configuración reCAPTCHA del proyecto y permite
sobrescribirla mediante `RECAPTCHA_SECRET`. La clave también debe autorizar tu dominio.

## 2. Comprobar que existe la API

Abre esta URL, que funciona sin reglas de reescritura:

```
http://localhost/repositorio_api/api/index.php?route=/v1/health
```

La respuesta debe ser JSON, con `name: Repositorio INCOS API`, `version: 1.0.0`
y `status: ok`. Este endpoint confirma el arranque de la API, no la conexión SQL.
Para comprobar también la conexión a la base, consulta:

```
http://localhost/repositorio_api/api/index.php?route=/v1/carreras
```

Recibirás un objeto con `data` y `meta`, por ejemplo:

```json
{
  "data": [{"id": 1, "nombre_carrera": "Sistemas Informáticos"}],
  "meta": {"page": 1, "per_page": 20, "total": 1, "last_page": 1}
}
```

Los datos del ejemplo son ilustrativos; tus identificadores y cantidades pueden ser otros.

Con mod_rewrite y AllowOverride habilitados también funciona la ruta limpia:
`http://localhost/repositorio_api/api/v1/carreras`.
Si aparece 404 en esa ruta, usa `api/index.php?route=/v1/carreras`.

## 3. Comprobar la integración de las pantallas

1. Presiona F12 en Chrome y abre **Network / Red**.
2. Filtra por **Fetch/XHR**.
3. Inicia sesión desde la pantalla habitual.
4. Registra una carrera de prueba y luego edítala o elimínala.
5. Verás peticiones a `api/index.php?route=/v1/...`, con métodos POST, PATCH o DELETE.
6. Selecciona una petición y revisa **Payload** y **Response**: los datos viajan
   como JSON. Las cargas de PDF usan multipart/form-data.

Esto permite comprobar la integración real. Tener una carpeta llamada `api`
no bastaría: aquí existen rutas, métodos HTTP, validación, permisos y respuestas JSON.

## 4. Métodos y recursos

| Método | Ruta de ejemplo | Operación |
| --- | --- | --- |
| GET | `/v1/carreras` | Listar con paginación. |
| GET | `/v1/carreras/7` | Consultar un registro. |
| POST | `/v1/carreras` | Crear. |
| PATCH | `/v1/carreras/7` | Modificar campos enviados. |
| PUT | `/v1/carreras/7` | Actualizar validando los campos obligatorios. |
| DELETE | `/v1/carreras/7` | Eliminar si no existen dependencias. |

Recursos: `carreras`, `modalidades`, `cargos`, `tutores`, `estudiantes`, `usuarios`,
`administrativos`, `proyectos`, `repositorio`, `repositorio-2022`, `archivos`,
`etapas`, `tipos-postulante`, `tipos-proyecto` e `historial`.

`historial` es de solo lectura. Los PDF se cargan por su servicio específico,
no enviando una ruta de disco por JSON. Los nombres de campos conservan los del
SQL, incluidos `carrrera_id` y `año_egreso`.

Listas: `page`, `per_page` (máximo 100), `q` y filtros por columnas permitidas.
Ejemplo con URL alternativa:
`api/index.php?route=/v1/tutores&carrrera_id=1&page=1&per_page=10`.

| Ruta especial | Método | Uso |
| --- | --- | --- |
| `/v1/auth/csrf` | GET | Obtener cookie y token CSRF. |
| `/v1/auth/login` | POST | Verificar usuario y contraseña. |
| `/v1/auth/me` | GET | Consultar el usuario autenticado. |
| `/v1/auth/logout` | POST | Cerrar la sesión del navegador. |
| `/v1/inscripciones` | POST | Crear estudiante y cuenta, con reCAPTCHA. |
| `/v1/administrativos/alta` | POST | Crear administrativo y cuenta. |
| `/v1/archivos` | POST multipart | Cargar PDF del usuario. |
| `/v1/repositorio-2022/documentos` | POST multipart | Registrar proyecto histórico con PDF. |
| `/v1/proyectos/{id}/publicacion` | POST | Publicar y copiar el documento. |
| `/v1/archivos/{id}/documento` | GET | Obtener PDF con autorización. |
| `/v1/repositorio/{id}/documento` | GET | Obtener PDF publicado. |
| `/v1/repositorio-2022/{id}/documento` | GET | Obtener PDF histórico. |

## 5. Autenticación y permisos

Para el navegador se mantiene la cookie de sesión PHP. Antes de modificar datos,
la integración obtiene un token de `/auth/csrf` y lo envía en `X-CSRF-Token`.
Login también requiere ese token. La API no habilita CORS abierto.

Para Postman u otros clientes, el login entrega `access_token`. En las peticiones
posteriores utiliza `Authorization: Bearer TOKEN`. Se valida su firma, vigencia
y el estado actual del usuario en cada petición. No es un JWT estándar.
El token vence en una hora; cambiar la contraseña lo invalida. Cerrar la sesión
elimina la sesión del navegador, pero no revoca los Bearer ya emitidos antes de vencer.

- Público: catálogos académicos y proyectos publicados activos.
- Estudiante/egresado: consulta de su ficha, usuario, archivos y proyectos;
  carga de documentos y creación de proyectos propios. No puede asignarse otro cargo.
- Personal administrativo: gestión de recursos, estados, publicación y consultas privadas.
- Las contraseñas y sus hashes no aparecen en las respuestas de usuarios.

Los nuevos endpoints utilizan consultas preparadas. La aplicación heredada
conserva sus rutas y comprobaciones originales para compatibilidad; añadir la API
no constituye una auditoría de seguridad completa de esas rutas antiguas.

## 6. Qué pantallas utilizan la API

| Parte existente | Integración añadida |
| --- | --- |
| Inicio de sesión | POST de credenciales y respuesta JSON. |
| Carreras, modalidades y cargos | Guardar, actualizar y eliminar. |
| Tutores | Guardar, actualizar, eliminar y paginación JSON. |
| Estudiantes | Actualización, eliminación y cambio de estado. |
| Usuarios | Creación, actualización desde el formulario y estados. |
| Alta de administrativos | Crear persona y cuenta en una transacción. |
| Registro público | Crear estudiante y cuenta verificando reCAPTCHA. |
| Documentos | Carga multipart validada. |
| Proyectos | Registro, cambio de etapa y publicación. |
| Repositorio e históricos | Cambios de estado y carga histórica. |
| Reportes PDF | Conservan su generador y sus pantallas originales. |

Las páginas iniciales y la mayoría de los listados siguen renderizándose mediante
PHP/MVC, con sus consultas anteriores. La API se añade como interfaz de datos y
se conecta a los flujos descritos; no se ha convertido toda la interfaz en una SPA.
Los ejemplos heredados incompletos, como empleados y algunos reportes de prueba,
no se han completado ni convertido en módulos nuevos.

## 7. Cambios en el procesamiento

- JSON uniforme: éxito con `data`, errores con `error`, listas con `meta`.
- Códigos HTTP: 200 correcto, 201 creado, 400 JSON inválido, 401 sin autenticación,
  403 sin permiso/CSRF, 404 no encontrado, 405 método no admitido,
  409 conflicto de relaciones, 422 validación y 503 fallo de base de datos.
- La creación de una persona con su cuenta utiliza transacciones.
- Desactivar un estudiante también desactiva sus cuentas vinculadas.
- Se bloquean eliminaciones con referencias para evitar borrados en cascada accidentales.
- PDF: extensión, MIME, cabecera, tamaño máximo de 20 MB y hasta 10 por solicitud.
  Ajusta `upload_max_filesize` y `post_max_size` de PHP si necesitas esos límites.
- La confirmación de Defensa cambia la etapa sin eliminar masivamente los archivos del estudiante.
- La publicación copia el PDF, conserva la gestión original, crea el registro público
  y elimina el registro de defensa. El trigger original registra el historial.
  Se conserva el archivo de origen y su registro para no romper otras referencias.
- Las rutas directas a PDF existentes se mantienen; los permisos de descarga de la API
  no sustituyen los controles de Apache sobre archivos servidos directamente.

## 8. Dónde está el código nuevo

| Archivo | Responsabilidad |
| --- | --- |
| `api/index.php` | Enrutamiento de la API y respuestas de error. |
| `app/Api/ResourceController.php` | Operaciones sobre recursos y permisos. |
| `app/Api/ResourceRepository.php` | Consultas preparadas y validación. |
| `app/Api/AuthController.php` | Sesión, token Bearer y CSRF. |
| `app/Api/FileController.php` | Carga y descarga de documentos. |
| `app/Api/PublicationController.php` | Publicación transaccional. |
| `app/Api/EnrollmentController.php` | Altas de personas y cuentas. |
| `app/Api/resources.json` | Tablas, campos y reglas permitidas. |
| `assets/js/api-rest.js` | Conexión de los formularios existentes con la API. |

## 9. Herramientas incluidas

- Abre `http://localhost/repositorio_api/docs/probar_api.html` para enviar peticiones
  y ver las respuestas sin instalar Postman.
- Importa `docs/Postman_INCOS.json` en Postman. Configura `api`, `usuario` y
  `password`, y ejecuta en orden. Usa una cuenta administrativa de prueba.
  Las solicitudes 6 a 8 crean, modifican y eliminan únicamente una carrera de prueba.
- `docs/openapi.json` describe rutas y campos. Los permisos y reglas de los flujos
  especiales están detallados en esta guía.
- Los resultados de validación de esta entrega se encuentran en
  `docs/VALIDACION_API.md` y los archivos de resultados JSON asociados.

Los documentos LEEME_MVC.md y VALIDACION_MVC.md describen la etapa MVC anterior.
Para esta entrega, utiliza esta guía y la validación API como referencia principal.
