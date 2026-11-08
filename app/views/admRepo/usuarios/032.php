
<!-- limpiar la busqueda -->
<script>
function limpiarBusqueda() {
    // Restablecer los valores de los campos de filtro y búsqueda
    document.querySelector('select[name="filtro"]').value = '';
    document.querySelector('input[name="buscar"]').value = '';

    // Redireccionar a la página sin parámetros de búsqueda
    window.location.href = 'usuarios.php';
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
            const fila = this.closest('.fila-estudiante');
            const mensajeEstado = fila.querySelector('.mensaje-estado');

            fetch('usuarioActivar.php', {
                method: 'POST',
                body: JSON.stringify({ id: id, estado: estado }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Actualizar el estado visual después de recibir la respuesta del servidor
                    mensajeEstado.textContent = estado ? 'Activado' : 'Desactivado';
                } else {
                    // Revertir el estado visual si hay un error en el servidor
                    this.checked = !this.checked;
                    console.error(data.message);
                }
            })
            .catch(error => {
                // Revertir el estado visual si hay un error en la solicitud
                this.checked = !this.checked;
                console.error(error);
            });

            // Almacenar el estado en el almacenamiento local después de enviar la solicitud al servidor
            localStorage.setItem(`estado-${id}`, estado);
        });

        const id = switchElement.getAttribute('data-id');
        const estadoGuardado = localStorage.getItem(`estado-${id}`);
        if (estadoGuardado !== null) {
            switchElement.checked = estadoGuardado === '1';
            const fila = switchElement.closest('.fila-estudiante');
            const mensajeEstado = fila.querySelector('.mensaje-estado');
            mensajeEstado.textContent = estadoGuardado === '1' ? 'Activado' : 'Desactivado';
        }
    });
});


</script>