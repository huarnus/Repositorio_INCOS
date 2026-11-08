        <tbody>
            <tr class="fila-estudiante ">
                <td><?= $tupla['id'] ?></td>
                <td><?= $tupla['nombre'] ?></td>
                <td><?= $tupla['nombreEstudiante'] ?></td>
                <td><?= $tupla['carnet'] . ' ' . $tupla['extencion'] ?></td>
                <td><?= $tupla['celular'] ?></td>
                <td><?= $tupla['año_egreso'] ?></td>
                <td><?= $tupla['correo'] ?></td>
                <td>
                <label class="switch">
            <!-- Utiliza la clase 'estado-switch' y el atributo 'data-id' para manejar el estado del interruptor -->
            <input type="checkbox" class="estado-switch" data-id="<?= $tupla['id'] ?>" <?= $tupla['estado'] ? 'checked' : '' ?>>
            <span class="slider"></span><br><br><br>
            <span class="mensaje-estado"></span>
        </label>

        </td>
               <td>
                    <a href="estudiantesmodificar.php?id=<?= $tupla['id'] ?>" class="btn btn-sm btn-rounded btn-outline-info" onclick="return confirm('Desea editar este registro?')">MODIFICAR</a>
                    <a href="estudiantesEliminar.php?id=<?= $tupla['id'] ?>" class="btn btn-sm btn-rounded btn-outline-info" onclick="return confirm('Desea eliminar este registro?')">eliminar</a>
                </td>
            </tr>
        </tbody>
        