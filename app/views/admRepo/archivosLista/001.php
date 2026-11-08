
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tipos de Documento por Estudiante</title>
    <style>
       table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #33FFDD; /* Verde claro para la cabecera */
        }

        tr:nth-child(even) {
            background-color: #e6ffe6; /* Verde más suave para filas pares */
        }

        tr:nth-child(odd) {
            background-color: #d9ffd9; /* Verde aún más suave para filas impares */
        }
    </style>
</head>
<body>
    <h1>Lista de Tipos de Documento por Estudiante</h1>
    <table>
        <tr>
        <!-- <th>id</th> -->
        <th>Título</th>
            <th>Estudiante</th>
            <th>Archivos Suvidos</th>
            <!-- <th>Instancias</th> -->
            <th>accion</th>
            
        </tr>
        