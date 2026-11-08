    <tbody>
        <tr>
            <td><?= $tupla['nombreC'] ?></td>
            <td><?= $tupla['nombre']?></td>
            <td><?= $tupla['usuario'] ?></td>
            <td>


        </td>
            

            <td>
                 <!-- <a href="usuarioModificar.php?cod=<?= $tupla['id'] ?>"
                    class="btn btn-sm btn-rounded btn-outline-info">MODIFICAR </a> -->
    <a href="estudiantesEliminar2.php?cod=<?= $tupla['id'] ?>"
    class="btn btn-sm btn-rounded btn-outline-info" onclick="return confirm('¿Está seguro que quiere eliminar este estudiante?')">Eliminar estudiante </a>
            </td>

        </tr>
    </tbody>
    