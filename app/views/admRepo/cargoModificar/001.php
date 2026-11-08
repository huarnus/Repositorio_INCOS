
    <h1>FORMULARIO PARA MODIFICAR CARGO</h1>

    <form action="cargoActualizar.php" method="post">
        <input type="hidden" name = "id" value="<?=$dato['id']?>"><br>
        <h3 class="text-primary card-title"><b>CARGO:</b></h3> 
       <input class="form-control" type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
    <button class="btn btn-success btn-block btn-rounded" type="submit">MODIFICAR</button>
    </form>
    