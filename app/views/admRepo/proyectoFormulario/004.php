
<form action="proyectoGrabar.php" method="POST" enctype="multipart/form-data" class="was-validated">
        <h5 class="text-primary card-title"><b>TITULO:</b></h5>
        <input type="" name="titulo" required   class="form-control" readonly placeholder="Ingrese la titulo de su proyecto" value="<?= $tituloArchivoInsta ?>" ><br>

        <input type="number" name="archivosinsta_id" id="archivosinsta_id" required  class="form-control" readonly placeholder="" value="<?= $idArchivoInsta ?>" hidden  ><br>


       

                <h5 class="text-primary card-title"><b>AUTOR DEL PROYECTO:</b></h5>
                <input type="" name="estudiante" required   class="form-control" readonly placeholder="Estudiante" value="<?= $usuarioC['nombre'] ?>" ><br>

                <input hidden type="text"  name="estudiantes_id" id="estudiantes_id" class="form-control" value="<?= $usuarioC['estudiantes_id'] ?>"><br>

   
<!-- Elegir la carrera para ver los tutores en esa carrera con filtración -->
<select name="carrrera_id" id="carrrera_id" class="form-control" required>
    <option value="" disabled selected>SELECCIONE LA CARRERA:</option>
    