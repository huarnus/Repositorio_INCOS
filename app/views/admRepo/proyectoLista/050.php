        </td>

            <td><?= $row['fecha_entrega'] ?></td>

            <td>
                <a href="archivo_estudiante.php?estudiante=<?= $row['estudiante'] ?> " class="btn btn-sm btn-rounded btn-outline-info" onclick="return ">Ver Archivos</a>
                <a href="proyectoEliminar.php?cod=<?= $row['id_pro'] ?> " class="btn btn-sm btn-rounded btn-outline-info" onclick="return confirm('Esta seguro que quiere eliminar este registro?')">eliminar</a>
                <a href="usuarioModificar.php?cod=<?= $row['id_pro'] ?>" class="btn btn-sm btn-rounded btn-outline-info">MODIFICAR </a>
            </td>
        </tr>
    