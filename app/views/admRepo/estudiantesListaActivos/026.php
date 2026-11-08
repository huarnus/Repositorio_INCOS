</div>

<script>
function limpiarBusqueda() {
    // Restablecer los valores de los campos de filtro y búsqueda
    document.querySelector('select[name="filtro"]').value = '';
    document.querySelector('input[name="buscar"]').value = '';

    // Redireccionar a la página sin parámetros de búsqueda
    window.location.href = 'estudiantesListaActivos.php';
}

</script>

<!-- para cambiar los estados del estudiante -->
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
            fetch('estudiantesactivar.php', {
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