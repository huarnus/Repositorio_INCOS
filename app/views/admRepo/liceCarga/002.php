        <tr>
            <td><?= $dato['nombre_lice'] ?></td>
            <td><?= $dato['nombrec'] ?></td>
            <td>
                <a href="liceEditar.php?id=<?= $dato['id'] ?>" class="btn btn-sm btn-rounded btn-outline-secondary">editar &nbsp</a>
                <a href="liceEliminar.php?id=<?= $dato['id'] ?>" onclick="return confirm('esta seguro de borrar este registro')" class="btn btn-sm btn-rounded btn-outline-primary">eliminar</a>
            </td>
        </tr>
    