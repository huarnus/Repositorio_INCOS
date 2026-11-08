
    <h1>FORMULARIO PARA MODIFICAR usuario</h1>

    <form action="usuarioActualizar.php" method="post">
        <input type="hidden" name = "id" value="<?=$dato['id']?>"><br>
        <h5 class="text-danger card-title"><b>cargo:</b></h5> 
    <select name="cargo_id" class="form-control">
            