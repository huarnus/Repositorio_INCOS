    <form action="archivosGrabar.php" method="POST" enctype="multipart/form-data">
       
        <h5 class="text-primary card-title"><b>TITULO:</b></h5>
        <input type="text" name="titulo[]" required class="form-control"><br>
        <h5 class="text-primary card-title"><b>NOMBRE COMPLETO:</b></h5>
        <input type="text" name="estudiante" id="estudiante" class="form-control" readonly value="<?= $usuarioC['nombre'] ?>"><br>
        <!-- <h5 class="text-primary card-title"><b>DESCRIPCION:</b></h5> 
        <input type="text" name="descripcion" required class="form-control"><br>
        <h5 class="text-primary card-title"><b>CANTIDAD:</b></h5> 
        <input type="text" name="cantidad" required class="form-control"><br>
        <h5 class="text-primary card-title"><b>PRECIO UNITARIO:</b></h5>  -->
        <h5 class="text-primary card-title"><b>SUBIR ARCHIVOS REQUERIDOS:</b></h5>
        <input type="file" name="pdf[]" class="form-control" accept="application/pdf" multiple><br>
       
        <button type="submit" class="btn btn-success btn-block btn-rounded">REGISTRAR</button>
    </form>
