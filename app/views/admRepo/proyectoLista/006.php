        <tr id="fila-<?= $row['id_pro'] ?>">
            <td><?= $row['titulo'] ?></td>

            <td>
                <?php echo strlen($row['descripcion']) > 100 ? substr($row['descripcion'], 0, 100) . '...' : $row['descripcion']; ?>                