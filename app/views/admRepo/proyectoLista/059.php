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
    window.location.href = 'proyectoLista.php';
}
    </script>

    <script>
        // cambia la instancia de los proyectos echos
function cambiarInstancia(id_Pro, id_instancia_actual) {
    var nuevoSelect = document.querySelector("#fila-" + id_Pro + " select");
    var nuevaInstancia = nuevoSelect.value;

    // Realizando la solicitud 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Parsear la respuesta JSON
            var response = JSON.parse(this.responseText);
            
            // Actualizar solo el contenido del select
            nuevoSelect.innerHTML = response.options;

            // Mostrar respuesta en la consola
            console.log(response);
            location.reload();

            // Continuar con cualquier otra lógica que necesites
        }
    };
    
    // Modificar la URL para incluir el id_pro
    xhttp.open("GET", "proyectoInstanciaCambiar.php?id=" + id_Pro + "&instancia=" + nuevaInstancia, true);
    xhttp.send();
}

// eliminacionDefensa

function eliminarRegistroDefensa(estudianteId, idProyecto) {
    // Obtener el nombre completo del estudiante
    var estudiante = obtenerNombreEstudiante(estudianteId);

    // Confirmar la eliminación con el usuario
    var confirmacion = confirm("¿Desea Actualizar el registro del estudiante " + estudiante + " que ha seleccionado 'Defensa'?");

    if (confirmacion) {
        // Realizando la solicitud para eliminar el registro
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Parsear la respuesta JSON si es necesario
                var response = JSON.parse(this.responseText);

                // Mostrar respuesta en la consola si es necesario
                console.log(response);

                // Puedes recargar la página o realizar otras acciones según sea necesario
                location.reload();
            }
        };
        // Modificar la URL para incluir el estudiante_id y el id_pro
        xhttp.open("GET", "proyectoCambiarDefensa.php?estudiante_id=" + estudianteId + "&id_pro=" + idProyecto, true);
        xhttp.send();
    }
}

function obtenerNombreEstudiante(estudianteId) {
    // Realizar una solicitud AJAX para obtener el nombre completo del estudiante
    // Puedes adaptar este código según la estructura de tu base de datos y la lógica de obtención de datos
    var nombreCompleto = ""; // Aquí debes obtener el nombre completo del estudiante

    return nombreCompleto;
}

</script>

<script>
    // envia los datos para el repositorio
function enviarAProyectoRepositorio(idProyecto) {
    // Confirmar la acción con el usuario
    var confirmacion = confirm("¿Desea enviar este proyecto al 'REPOSITORIO'?");

    if (confirmacion) {
        // Realizar la solicitud para enviar a la tabla proyecto_repositorio
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Parsear la respuesta JSON si es necesario
                var response = JSON.parse(this.responseText);

                // Mostrar respuesta en la consola si es necesario
                console.log(response);

                // Puedes recargar la página o realizar otras acciones según sea necesario
                location.reload();
            }
        };

        // Modificar la URL para incluir el id_pro
        xhttp.open("GET", "proyectoRepositorio2023.php?id_pro=" + idProyecto, true);
        xhttp.send();
    }
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




