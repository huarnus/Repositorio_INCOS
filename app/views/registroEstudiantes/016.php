
  <script>
    function generarUsuario() {
        // Obtener los valores de los campos de apellido paterno, materno y nombre
        var paterno = document.getElementById('paterno').value;
        var materno = document.getElementById('materno').value;
        var nombre = document.getElementById('nombre').value;

        // Tomar la inicial del apellido paterno y materno
        var inicialPaterno = paterno.charAt(0);
        var inicialMaterno = materno.charAt(0);

        // Obtener todos los nombres
        var nombres = nombre.split(' ');

        // Construir el usuario con las iniciales y todos los nombres
        var usuario = inicialPaterno + inicialMaterno + nombres.join('');

        // Asignar el usuario al campo correspondiente
        document.getElementById('usuario').value = usuario.toLowerCase(); // Convertir a minúsculas si es necesario
    }
</script>

<script>
    // Agrega la máscara de entrada para el número de teléfono
    $(document).ready(function () {
      $('#celular').inputmask('(999) 999-9999');
    });
  </script>

  <script>
    function autocompletarUsuarioContraseña() {
        var carnet = document.getElementById("carnet").value;
        var contraseña = document.getElementById("contraseña");

        // Asignar el valor del carnet al usuario y contraseña
         contraseña.value = carnet;
    }
</script>