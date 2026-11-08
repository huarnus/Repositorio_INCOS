
<!-- Script para filtrar tutores según la carrera seleccionada -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function(){
    // Al cambiar la selección de la carrera
    $('#carrrera_id').change(function(){
        var selectedCarrera = $(this).val();
        
        // Ocultar todos los tutores
        $('#licenciados_id option').hide();
        
        // Mostrar solo los tutores de la carrera seleccionada
        $('#licenciados_id option[data-carrera-id="' + selectedCarrera + '"]').show();
        
        // Restaurar el valor predeterminado en la selección de tutores
        $('#licenciados_id').val('').prop('disabled', false);
    });
});
</script>