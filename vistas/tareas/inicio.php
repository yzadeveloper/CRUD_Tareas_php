<a name="" id="" class="btn btn-success" href="?controlador=tareas&accion=crear" role="button">Agregar tarea</a>


<div class="table-responsive">
    <table class="table table-bordered">
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
