
    <h1>FORMULARIO PARA MODIFICAR ESTUDIANTES</h1>

    <form action="estudiantesActualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $dato['id'] ?>"><br>
    
   
<label for="nombreAp">Nombre y Apellido:</label>
    <input type="text" name="nombreAp" value="<?= $dato['nombreAp'] ?>"><br>
    
   
<label for="carnet">CI:</label>
    <input type="text" name="carnet" value="<?= $dato['carnet'] ?>"><br>
    <button type="submit">MODIFICAR</button>
</form>

    