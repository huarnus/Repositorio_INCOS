            <tbody>
                <tr>
                    <td><?= $tupla['nombre'] ?></td>
                    
                    <td>
                
                <a href="cargoModificar.php?cod=<?= $tupla['id'] ?>"
                    class="btn btn-sm btn-rounded btn-outline-info">MODIFICAR </a>
                <a href="cargoEliminar.php?cod=<?= $tupla['id'] ?> " class="btn btn-sm btn-rounded btn-outline-info"
                    onclick="return confirm('Esta seguro que quiere eliminar este registro?')">eliminar</a>
            </td>
                </tr>
            </tbody>
        