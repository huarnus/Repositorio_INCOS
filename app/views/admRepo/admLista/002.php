        <tr>
            
            <td><?=$dato['nombrec']?></td>
            <td><?=$dato['nombreCompleto']?></td>
            <td><?=$dato['carnet']?></td>
            <td><center><?=$dato['correo']?></center></td>
            <!-- <td><?=$dato['pu']?></td> -->
            <!-- <th><img class="img-thumbnail" src="storage_productos/<?=$dato['id']?>.png" width="200" height="200" ></th> -->

   
            <td>
                
        <a href="admEditar.php?id=<?=$dato['id']?>"  
        class="btn btn-sm btn-rounded btn-outline-secondary">editar &nbsp</a>
        <a href="admEliminar.php?id=<?=$dato['id']?>" 
        onclick="return confirm('esta seguro de borrar este registro')"
        class="btn btn-sm btn-rounded btn-outline-primary">eliminar</a>
            </td>
            <!-- <td>
        <a href="productosver.php?id=<?=$dato['id']?>" 
        class="btn btn-sm btn-rounded btn-outline-info">Ver Producto</a>
            </td> -->

           
        </tr>
        