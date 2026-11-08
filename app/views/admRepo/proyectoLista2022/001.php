<h1>Lista de Proyectos en el Repositorio Anteriores a 2022</h1>

<style>
       /* Estilos para el interruptor personalizado */
        

    .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Estilos para el interruptor de modo oscuro */
        .form-check-input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .form-check-label {
            position: relative;
            padding-left: 40px; /* Espacio para el interruptor */
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
        }

        .fila-proyectoRepositorio .estado-switch:not(:checked) {
            content: '\1F311'; /* Símbolo Unicode para la luna (puedes cambiarlo) */
            color: #fff;
            background-color: #000; /* Color de fondo del modo oscuro */
            border-radius: 50%;
            padding: 6px;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);/* Cambia el color de fondo cuando está apagado */
        }

        /* Estilos para las filas activadas */
.activado {
    background-color: #c8e6c9; /* Cambiar el color de fondo a verde claro (#c8e6c9) para las filas activadas */
    color: #000000; /* Cambiar el color del texto a negro (#000000) para que sea legible en el fondo verde claro */
}

/* Estilos para las filas desactivadas */
.desactivado {
    background-color: #ffcccc; /* Cambiar el color de fondo a rojo claro (#ffcccc) para las filas desactivadas */
    color: #000000; /* Cambiar el color del texto a negro (#000000) para que sea legible en el fondo rojo claro */
}

    </style>

    <!-- buscardor  -->

    <div class="table-responsive">    
        <div>
            <form method="GET" action="">
                <div class="input-group mb-3">
                    <select name="filtro" class="form-control col-lg-2" >
                    <option value="autor">Nombre Estudiante</option>
                        <option value="nombre_carrera">Carrera</option>                        
                        <option value="nombreM">Modalidad</option>
                        <option value="tutor">Tutor</option>
                        <option value="titulo">Titulo Proyecto</option>
                        <option value="estado">Estado</option>

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

    <form method="POST" action="reporte/ReportesRepositorio/formularioProyecto2022.php" target="_blank">
    <input type="hidden" name="filtro" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
    <input type="hidden" name="buscar" value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
    <button class="btn btn-sm btn-rounded btn-outline-info" type="submit">Generar Informe</button>
</form>

<table class="table table-bordered table-hover table-info table-responsive">
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Tutor</th>
            <th>Descripción</th>
            <th>Gestión</th>
            <th>Carrera</th>
            <th>Modalidad</th>
            <th>Estado</th>
            <th>Fecha Publicacion</th>
            <th>Archivo PDF</th>
        </tr>
    </thead>
   
    