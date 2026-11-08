
</table>

    

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
    window.location.href = 'proyectoLista2023.php';
}

</script>

<script>
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
<!-- para cambiar el estado  -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const switches = document.querySelectorAll('.estado-switch');

    switches.forEach(switchElement => {
        switchElement.addEventListener('change', function() {
            const id = this.getAttribute('data-id');
            const estado = this.checked ? 1 : 0;
            const fila = this.closest('.fila-estudiante'); // Obtener la fila más cercana
            const mensajeEstado = fila.querySelector('.mensaje-estado'); // Obtener el elemento para el mensaje

            // Almacenar el estado en el almacenamiento local
            localStorage.setItem(`estado-${id}`, estado);

            // Enviar solicitud AJAX al servidor para actualizar el estado
            fetch('proyectoRepoActivar2023.php', {
                method: 'POST',
                body: JSON.stringify({ id: id, estado: estado }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Actualizar el estado visualmente según la respuesta del servidor
                if (data.success) {
                    // Cambiar el color de fondo de la fila a rojo cuando se desactiva
                    if (estado === 0) {
                        fila.classList.add('desactivado');
                        mensajeEstado.textContent = 'Desactivado'; // Mostrar el mensaje
                    } else {
                        fila.classList.remove('desactivado'); // Remover la clase 'desactivado' cuando se activa
                        mensajeEstado.textContent = 'Activado'; // Mostrar el mensaje
                    }
                    // En caso de éxito, puedes manejar la respuesta aquí
                    console.log(`Estado actualizado a ${data.estado}`);
                } else {
                    // En caso de error, puedes manejar el error aquí
                    console.error(data.message);
                }
            })
            .catch(error => {
                console.error(error);
            });
        });

        // Obtener el estado del almacenamiento local y aplicarlo al interruptor
        const id = switchElement.getAttribute('data-id');
        const estadoGuardado = localStorage.getItem(`estado-${id}`);
        if (estadoGuardado !== null) {
            switchElement.checked = estadoGuardado === '1';

            // Cambiar el color de fondo de la fila a rojo si el interruptor está desactivado
            const fila = switchElement.closest('.fila-estudiante');
            const mensajeEstado = fila.querySelector('.mensaje-estado'); // Obtener el elemento para el mensaje
            if (estadoGuardado === '0') {
                fila.classList.add('desactivado');
                mensajeEstado.textContent = 'Desactivado'; // Mostrar el mensaje
            }
        }
    });
});

</script>

