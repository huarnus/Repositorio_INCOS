
<h1>Lista de Usuarios que Completaron el Formulario</h1>


<div class="table-responsive">    
        <div>
            <form method="GET" action="">
                <div class="input-group mb-3">
                    <select name="filtro" class="form-control col-lg-2" >
                    <option value="estudiante">Nombre del Estudiante</option>
                        <option value="carrera">Carrera</option>                        
                        <option value="modalidad">Modalidad</option>
                        <option value="liceN">Tutor</option>
                        <option value="titulo">Titulo Proyecto</option>
                        <option value="instancia">Instancia</option>

                        <!-- <option value="estado">Estado</option> -->
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

    <!-- <a href="usuarioinactivoEstudiante.php" class="btn btn-sm btn-rounded btn-outline-info"> LISTA DE INACTIVOS</a> -->

    <!-- Agrega este botón para generar el informe -->

<form method="POST" action="reporte/ReportesRepositorio/formularioProyecto.php" target="_blank">
    <input type="hidden" name="filtro" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
    <input type="hidden" name="buscar" value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
    <button class="btn btn-sm btn-rounded btn-outline-info" type="submit">Generar Informe</button>
</form>


<table class="table table-bordered table-hover table-info table-responsive">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Autor</th>
            <th>Tutor</th>
            <th>Gestión</th>
            <th>Carrera</th>
            <th>Modalidad</th>
            <th>Tipo de Proyecto</th>
            <th>Instancias</th>
            <th>Fecha de Entrega</th>
            <th>Acciones </th>
        </tr>
    </thead>

    