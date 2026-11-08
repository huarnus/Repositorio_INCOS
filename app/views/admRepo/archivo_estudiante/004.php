            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Archivo: <?php echo $nombreArchivo; ?></h5>
                        <a href="<?php echo $rutaArchivo; ?>" target="_blank" class="btn btn-primary">Descargar archivo</a>
                        <br>
                        <!-- Agregar una vista previa del archivo PDF -->
                        <embed src="<?php echo $rutaArchivo; ?>" type="application/pdf" width="100%" height="300px">
                    </div>
                </div>
            </div>
    