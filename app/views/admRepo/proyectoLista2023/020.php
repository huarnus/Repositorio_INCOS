            </td>

            
            <td><?= $row['gestion'] ?></td>
            <td><?= $row['nombre_carrera'] ?></td>
            <td><?= $row['nombreM'] ?></td>
            
            <td>
            <label class="switch">
            <!-- Utiliza la clase 'estado-switch' y el atributo 'data-id' para manejar el estado del interruptor -->
            <input type="checkbox" class="estado-switch" data-id="<?= $row['id_repo'] ?>" <?= $row['estado'] ? 'checked' : '' ?>>
            <span class="slider"></span><br><br><br>
            <span class="mensaje-estado"></span>
        </label>
            </td>

            <td><?= $row['fecha_publicacion'] ?></td>

            <td>

            