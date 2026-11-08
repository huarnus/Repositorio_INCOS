<?php echo "<td>" . $fila['titulo'] . "</td>"; ?><?php echo "<td>" . $fila['estudiante'] . "</td>"; ?><?php echo "<td>" . $fila['tipos_documento'] . "</td>"; ?>        <td>
        <a href="archivo_estudiante.php?estudiante=<?=$fila['estudiante']?>" 
        class="btn btn-sm btn-rounded btn-outline-info">VER ARCHIVOS</a>
            </td>

        <?php echo "</tr>"; ?>