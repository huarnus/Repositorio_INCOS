        <tr  class="fila-estudiante" id="fila-<?= $row['id_repo'] ?>"  >
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['autor'] ?></td>
            <td><?= $row['tutor'] ?></td>
            <td>
                <?php echo strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion']; ?>                