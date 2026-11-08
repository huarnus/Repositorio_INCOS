</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Cargar la primera página al cargar la página inicialmente
        cargarPagina(1);
    });

    function cargarPagina(pagina) {
        // Usa AJAX para cargar dinámicamente los resultados de la página
        $.ajax({
            url: 'liceCarga.php',
            type: 'GET',
            data: { page: pagina },
            success: function(data) {
                $('#table-container').html(data);
            }
        });
    }
</script>

