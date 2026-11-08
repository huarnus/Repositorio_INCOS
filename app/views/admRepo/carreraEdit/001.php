
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="text-danger card-title"><u>Formulario de Edición de Carrera</u> </h1>
</div>
    <form action="carreraActualizar.php" method="POST">
    <input type="hidden" name="id"  value="<?=$dato['id']?>">
    <h5 class="text-danger card-title"><b>CARRERA:</b></h5> 
    <input type="text" name="nombre_carrera"  class="form-control" value="<?=$dato['nombre_carrera']?>"><br>
    
    <br><br>
    <button type = "sutmit" class="btn btn-outline-warning btn-block btn-rounded">MODIFICAR</button>
</form>
