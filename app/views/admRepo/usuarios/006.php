    <tbody>
        <tr  id="fila-<?= $row['id'] ?>" class="fila-estudiante"   >
            <td><?= $tupla['nombreC'] ?></td>
            <td><?= $tupla['nombre']?></td>
            <td><?= $tupla['carnet'] ." ". $tupla['extencion'] ?></td>
            <td><?= $tupla['celular'] ?></td>
            <td><?= $tupla['correo'] ?></td>
            <td><?= $tupla['usuario'] ?></td>
            <td>
    <label class="switch">
        <input type="checkbox" class="estado-switch" data-id="<?= $tupla['id'] ?>" <?= $tupla['estado'] ? 'checked' : '' ?>>
        <span class="slider"></span>
    </label>
    <label class="mensaje-estado"><?= $tupla['estado'] ? 'Activado' : 'Desactivado' ?></label>
</td>

            

            <td>
                 <!-- <a href="usuarioModificar.php?cod=<?= $tupla['id'] ?>"
                    class="btn btn-sm btn-rounded btn-outline-info">MODIFICAR </a> -->
                    <a href="estudiantesEliminar2.php?cod=<?= $tupla['id_es'] ?>"
    class="btn btn-sm btn-rounded btn-outline-info" onclick="return confirm('¿Está seguro que quiere eliminar este estudiante?')">Eliminar estudiante </a>
            </td>

        </tr>
    </tbody>
    