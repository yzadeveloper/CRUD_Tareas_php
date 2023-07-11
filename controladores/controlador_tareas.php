<?php 

class ControladorTareas{

    public function inicio(){

        include_once("vistas/tareas/inicio.php");

    }

    public function crear(){

        include_once("vistas/tareas/crear.php");

        
    }

    public function editar(){

        include_once("vistas/tareas/editar.php");
        
    }
}

?>