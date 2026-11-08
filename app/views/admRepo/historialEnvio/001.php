
<h1>Historial de Envios</h1>

<div class="table-responsive">
    <div>
        <form method="GET" action="">
            <div class="input-group mb-3">
                <select name="filtro" class="form-control col-lg-2">
                    <option value="estudiante">Nombre Estudiante</option>
                    <option value="instancia">Instancia</option>
                    <option value="carrera">Carrera</option>                        
                        <option value="modalidad">Modalidad</option>
                        <option value="tutor">Tutor</option>
                        <option value="titulo">Titulo Proyecto</option>
                        
                </select>
                <input class="form-control col-lg-2" type="text" name="buscar" placeholder="Buscar">
                <div class="input-group-append">
                    <button class="btn btn-rounded btn-outline-info ml-2" type="submit">Buscar</button>
                    <button class="btn btn-rounded btn-outline-secondary ml-2" type="button" onclick="limpiarBusqueda()">Actualizar Datos</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Agrega este botón para generar el informe -->
<form method="POST" action="reporte/ReportesRepositorio/historial.php" target="_blank">
    <input type="hidden" name="filtro" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
    <input type="hidden" name="buscar" value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
    <button class="btn btn-sm btn-rounded btn-outline-info" type="submit">Generar Informe</button>
</form><br>

<table class="table table-bordered table-hover table-info table-responsive">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Autor</th>
            <th>Tutor</th>
            <th>Fecha Entrega</th>
            <th>Carrera</th>
            <th>Modalidad</th>
            <th>ProyectoEs</th>
            <th>Instancias</th>
            <th>Fecha de Actualizacion</th>
        </tr>
    </thead>

    