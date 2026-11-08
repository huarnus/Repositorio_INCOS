
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="text-danger card-title"><u>Formulario para Modificar Modalidad</u> </h1>
</div>
    <form action="modalidadActualizar.php" method="POST">
    <input type="hidden" name="id"  value="<?=$dato['id']?>">
    <h5 class="text-danger card-title"><b>MODALIDAD:</b></h5> 
    <input type="text" name="nombreM"  class="form-control" value="<?=$dato['nombreM']?>"><br>
    <br><br>
    <button type = "sutmit" class="btn btn-outline-warning btn-block btn-rounded">MODIFICAR</button>
</form>
