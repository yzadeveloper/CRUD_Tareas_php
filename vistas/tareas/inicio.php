<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



    <body>

        <div style=display:flex>
            <a name="" id="" class="btn btn-info" href="?controlador=tareas&accion=crear" role="button">Agregar tarea</a>
            <a name="" id="" class="btn btn-success" href="?controlador=tareas&accion=inicio" role="button">Ver todas</a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-success" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filtrar por
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?controlador=tareas&accion=ordenar_pendiente">Pendientes próximos</a></li>
                    <li><a class="dropdown-item" href="?controlador=tareas&accion=ordenar_hecho">Hecho más recientes</a></li>
                    <li><a class="dropdown-item" href="?controlador=tareas&accion=ordenar_personal">Personal</a></li>
                    <li><a class="dropdown-item" href="?controlador=tareas&accion=ordenar_trabajo">Trabajo</a></li>
                </ul>
            </div>
        </div>



        <div class="table-responsive">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tarea</th>
                        <th>Descripción</th>
                        <th>Fecha vencimiento</th>
                        <th>Categoría</th>
                        <th>Estado</th>
                        <th>Fecha alta</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($tareas as $tarea) { ?>
                    <tr class="">
                        <td><?php echo $tarea->id; ?></td>
                        <td><?php echo $tarea->tarea; ?></td>
                        <td><?php echo $tarea->descripcion; ?></td>
                        <td><?php echo $tarea->fecha_vencimiento; ?></td>
                        <td><?php echo $tarea->categoria; ?></td>
                        <td><?php echo $tarea->estado; ?></td>
                        <td><?php echo $tarea->fecha_alta; ?></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Button group name">
                            <a href="?controlador=tareas&accion=editar&id=<?php echo $tarea->id; ?>" class="btn btn-info">Editar</a>
                            <a href="?controlador=tareas&accion=eliminar&id=<?php echo $tarea->id; ?>" class="btn btn-danger">Eliminar</a>
                        </div> 
                        </td>
                    </tr>
                <?php } ?>
                    
                </tbody>
            </table>
        </div>

        
        
        <script type="text/javascript">
        
            document.addEventListener("DOMContentLoaded", function() {
                var table = document.getElementById("table");
                var headers = table.getElementsByTagName("th");
                var rows = Array.from(table.getElementsByTagName("tr")).slice(1);
                var sortOrder = 1; // 1 para orden ascendente, -1 para orden descendente

                // Asignar evento clic a cada encabezado de columna
                for (var i = 0; i < headers.length; i++) {
                headers[i].addEventListener("click", sortTable.bind(null, i));
                headers[i].style.cursor = "pointer";
                }

                function sortTable(columnIndex) {
                rows.sort(function(rowA, rowB) {
                    var rowDataA = rowA.getElementsByTagName("td")[columnIndex].innerText;
                    var rowDataB = rowB.getElementsByTagName("td")[columnIndex].innerText;
                    if (rowDataA < rowDataB) {
                    return -1 * sortOrder;
                    } else if (rowDataA > rowDataB) {
                    return 1 * sortOrder;
                    }
                    return 0;
                });

                // Reorganizar las filas en la tabla
                for (var i = 0; i < rows.length; i++) {
                    table.tBodies[0].appendChild(rows[i]);
                }

                // Cambiar el orden de clasificación para el siguiente clic en el mismo encabezado
                sortOrder *= -1;
                }
            });


        </script>

    </body>

</html>