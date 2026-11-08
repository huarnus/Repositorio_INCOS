            <tbody>
                <tr>
                <td><?= $tupla['id'] ?></td>
                    <td><?= $tupla['cargo'] ?></td>
                    <td><?= $tupla['nombreAp'] ?></td>
                    <td><?= $tupla['carnet'] ?></td>
                    <td><?= $tupla['usuario'] ?></td>
                    <td><?= $tupla['estado'] ?></td>
                    <td><a href="usuariodesactivar.php?cod=<?= $tupla['id'] ?> " class="btn btn-sm btn-rounded btn-outline-info" onclick="return confirm('Esta seguro que quiere desactivar este registro?')">DESACTIVAR</a>
                    <a href="usuarioModificar.php?cod=<?= $tupla['id'] ?>" class="btn btn-sm btn-rounded btn-outline-info">MODIFICAR </a></td>
                </tr>
            </tbody>
        