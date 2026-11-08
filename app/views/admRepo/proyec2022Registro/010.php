    <form action="proyec2022Grabar.php" method="POST" enctype="multipart/form-data">
      
        <h5 class="text-primary card-title"><b>Titulo:</b></h5>
        <input type="text" name="titulo" required class="form-control" placeholder="Ingrese el titulo del proyecto"><br>
        <div class="form-group">
        <h5 class="text-primary card-title"><b>Descripcion - Resumen / No mas de 200 palabras:</b></h5> 
        <textarea class="form-control" name="descripcion" rows="12" placeholder="Ingrese la descripción del proyecto" required></textarea>
                </div>
        <h5 class="text-primary card-title"><b>Autor:</b></h5>
        <input type="text" name="autor" id="autor" class="form-control" ><br>

           
<!-- Elegir la carrera para ver los tutores en esa carrera con filtración -->
<select name="carrrera_id" id="carrrera_id" class="form-control" required>
    <option value="" disabled selected>Ingrese la Carrera:</option>
    