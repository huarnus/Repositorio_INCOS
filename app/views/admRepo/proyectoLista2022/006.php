        <tr id="fila-<?= $row['id'] ?>" class="fila-proyectoRepositorio" >
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['autor'] ?></td>
            <td><?= $row['tutor'] ?></td>
            <td>
                <?php echo strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion']; ?>                