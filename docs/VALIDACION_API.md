# Validación de esta entrega API

- **64 pruebas HTTP satisfactorias**, con PHP 8.3.6 y MariaDB 10.11.14.
- Se importó el SQL original en una base de datos temporal y desechable.
  No se modificó el SQL entregado ni una base externa del usuario.
- Se verificaron autenticación, CSRF, token Bearer, roles, datos propios,
  validación, las 15 colecciones, altas y modificaciones, eliminación,
  conflictos de relaciones, subida/descarga de PDF, publicación transaccional,
  bloqueo de segunda publicación, desactivación y cierre de sesión.
- **736 archivos PHP** de app, api y config pasan revisión de sintaxis.
- JavaScript nuevo comprobado con `node --check`.
- **183 hojas de estilo y 59 PDF originales sin cambios**, comprobados mediante SHA-256.
- 5111 archivos del paquete MVC permanecen idénticos.
- Los cinco archivos anteriores modificados solo conectan el script API y
  añaden configuración del puerto de base de datos.
- Los documentos ficticios de pruebas se retiraron antes de empaquetar.

## Límites

No se ejecutó la interfaz en un navegador: Chromium no está disponible y su
instalación no proporcionó un archivo válido. La conservación visual se apoya
en el HTML y estilos originales, la ausencia de cambios en sus vistas y la
comprobación de recursos; hace falta revisar los flujos de interfaz en XAMPP.
No se verificaron las credenciales reales de reCAPTCHA, el correo ni todos los
reportes PDF heredados. La prueba HTTP utilizó un PDF mínimo para comprobar
el transporte y las validaciones, no el contenido académico de los documentos.
La importación se comprobó en MariaDB 10.11; el servidor original del volcado
era MariaDB 10.4, así que conviene confirmar el funcionamiento en tu XAMPP.

Los archivos JSON de esta carpeta contienen los resultados detallados.
