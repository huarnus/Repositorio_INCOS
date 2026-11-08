            <tbody>
                <tr>
                <td><?= $tupla['id'] ?></td>
                <td><?= $tupla['cargo'] ?></td>
                    <td><?= $tupla['nombreAp'] ?></td>
                    <td><?= $tupla['carnet'] ?></td>
                    <td><?= $tupla['usuario'] ?></td>
                    <td><?= $tupla['estado'] ?></td>
                    <td>
                    <a href="usuarioactivar.php?cod=<?=$tupla['id'] ?>"><button>ACTIVAR</button></a> 
                    <a href="eliminar.php?cod=<?=$tupla['id'] ?>"><button>ELIMINAR</button></a>
                </td>
                </tr>
            </tbody>
        