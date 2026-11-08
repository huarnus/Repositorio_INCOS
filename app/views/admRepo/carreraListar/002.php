        <tr>
            <td><?=$dato['id']?></td>
            <td><?=$dato['nombre_carrera']?></td>

            <td>
                
        <a href="carreraEdit.php?id=<?=$dato['id']?>" 
        class="btn btn-sm btn-rounded btn-outline-secondary">editar</a>
        <a href="carreraEliminar.php?id=<?=$dato['id']?>" 
        onclick="return confirm('esta seguro de borrar este registro')"
        class="btn btn-sm btn-rounded btn-outline-primary">eliminar</a>

            </td>
      
        </tr>
        