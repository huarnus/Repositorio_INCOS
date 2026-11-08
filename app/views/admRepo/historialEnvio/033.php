</table>


<br><br>
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descripción Completa del Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se mostrará la descripción completa del proyecto -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    


<script>
function limpiarBusqueda() {
    // Restablecer los valores de los campos de filtro y búsqueda
    document.querySelector('select[name="filtro"]').value = '';
    document.querySelector('input[name="buscar"]').value = '';

    // Redireccionar a la página sin parámetros de búsqueda
    window.location.href = 'historialEnvio.php';
}

// modal para la descripcion
    document.addEventListener("DOMContentLoaded", function() {
        var verMasLinks = document.querySelectorAll('.ver-mas');
        var modalBody = document.querySelector('.modal-body');

        verMasLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var descripcion = event.target.getAttribute('data-descripcion');
                modalBody.textContent = descripcion;
            });
        });
    });
</script>




