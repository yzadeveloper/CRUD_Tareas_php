<?php 

include_once("modelos/tarea.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorTareas{

    public function inicio(){

        print_r(Tarea::consultar());

        include_once("vistas/tareas/inicio.php");

    }

    public function crear(){

        if($_POST){

            // print_r($_POST);
            $tarea=$_POST['tarea'];
            $descripcion=$_POST['descripcion'];
            $fecha_vencimiento=$_POST['fecha_vencimiento'];
            $categoria=$_POST['categoria'];
            $estado=$_POST['estado'];
            
            Tarea::crear($tarea, $descripcion, $fecha_vencimiento, $categoria, $estado);

            
        }

        include_once("vistas/tareas/crear.php");

        
    }

    public function editar(){

        include_once("vistas/tareas/editar.php");
        
    }
}

?>