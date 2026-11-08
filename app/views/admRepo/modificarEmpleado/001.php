<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO PARA MODIFICAR EMPLEADO</h1>

    <form action="updateEmpleado.php" method="post">
        <input type="hidden" name = "id_empleado" value="<?=$dato['id_empleado']?>"><br><br>
        CARGO:  <input type="number" name="id_cargo" value="<?=$dato['id_cargo']?>"><br><br>
        CARNET: <input type="text" name="ci" value="<?=$dato['ci']?>"><br><br>
        NOMBRE: <input type="text" name="nombre" value="<?=$dato['nombre']?>"><br><br>
        APELLIDO PATERNO: <input type="text" name="paterno" value="<?=$dato['paterno']?>"><br><br>
        APELLIDO MATERNO: <input type="text" name="materno" value="<?=$dato['materno']?>"><br><br>
        DIRECCION: <input type="text" name="direccion" value="<?=$dato['direccion']?>"><br><br>
        TELEFONO: <input type="text" name="telefono" value="<?=$dato['telefono']?>"><br><br>
        FECHA DE NACIMIENTO: <input type="date" name="fechanacimiento" value="<?=$dato['fechanacimiento']?>"><br><br>
        GENERO: 
        <!-- <input type="text" name="genero" required value="<?=$dato['genero']?>"><br> -->

        <select name="genero"  class="form-control">
    <option value="Masculino" 