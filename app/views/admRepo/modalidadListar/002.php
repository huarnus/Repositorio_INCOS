        <tr>
            <!-- <td><?=$dato['id']?></td> -->
            <td><?=$dato['nombreM']?></td>
   
            <td>
                
        <a href="modalidadEdit.php?id=<?=$dato['id']?>" 
        class="btn btn-sm btn-rounded btn-outline-secondary">EDITAR</a>
        <a href="modalidadEliminar.php?id=<?=$dato['id']?>" 
        onclick="return confirm('esta seguro de borrar este registro')"
        class="btn btn-sm btn-rounded btn-outline-primary">ELIMINAR</a>

            </td>

        </tr>
        