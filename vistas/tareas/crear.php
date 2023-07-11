<div class="card">
    <div class="card-header">
        Agregar tarea
    </div>
    <div class="card-body">
        
        <form action="" method="post">

        <div class="mb-3">
          <label for="tarea" class="form-label">Tarea:</label>
          <input required type="text"
            class="form-control" name="tarea" id="tarea" aria-describedby="helpId" placeholder="Nombre de la tarea">
          
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <input  type="text_area" class="form-control" name="descripcion" id="descripcion" aria-describedby="descriptionHelpId" placeholder="Describe la tarea">

        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha vencimiento</label>
            <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento" aria-describedby="dataHelpId">

        </div>

        <div class="mb-3">
          <label for="categoria" class="form-label">Categoria:</label>
          <select id="categoria" name="categoria">
            <option value="personal">Personal</option>
            <option value="trabajo">Trabajo</option>
        </select>

        <div class="mb-3">
          <label for="estado" class="form-label">Estado:</label>
          <select id="estado" name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="hecho">Hecho</option>
        </select>

        <!-- <div class="mb-3">
            <label for="fecha" class="form-label">Fecha alta</label>
            <input type="date" class="form-control" name="fecha_alta" id="fecha_alta" aria-describedby="dataHelpId">

        </div> -->
          
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Agregar tarea">

        <a href="?controlador=tareas&accion=inicio" class="btn btn-primary">Cancelar </a>

        </form>

    </div>
    
</div>