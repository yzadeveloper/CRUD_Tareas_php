<?php 

include_once("modelos/tarea.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorTareas{

    public function inicio(){

        $tareas=Tarea::consultar();

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
            header("Location:./?controlador=tareas&accion=inicio");

            
        }

        include_once("vistas/tareas/crear.php");

        
    }

    public function editar(){
        $id=$_GET['id'];

        $tarea=(Tarea::buscar($id));
        

        if($_POST){
            $id=$_POST['id'];
            $tarea=$_POST['tarea'];
            $descripcion=$_POST['descripcion'];
            $fecha_vencimiento=$_POST['fecha_vencimiento'];
            $categoria=$_POST['categoria'];
            $estado=$_POST['estado'];
            $fecha_alta=$_POST['fecha_alta'];

            Tarea::editar($id, $tarea, $descripcion, $fecha_vencimiento, $categoria, $estado, $fecha_alta);

            header("Location:./?controlador=tareas&accion=inicio");
            
        }
       

        include_once("vistas/tareas/editar.php");
        
    }

    public function eliminar(){
        // print_r($_GET);
        $id=$_GET['id'];

        Tarea::eliminar($id);
        header("Location:./?controlador=tareas&accion=inicio");


    }

    public function ordenar_pendiente(){

        $tareas=Tarea::ordenar_pendiente();

        include_once("vistas/tareas/inicio.php");

    }

    public function ordenar_hecho(){

        $tareas=Tarea::ordenar_hecho();

        include_once("vistas/tareas/inicio.php");

    }

    public function ordenar_personal(){

        $tareas=Tarea::ordenar_personal();

        include_once("vistas/tareas/inicio.php");

    }

    public function ordenar_trabajo(){

        $tareas=Tarea::ordenar_trabajo();

        include_once("vistas/tareas/inicio.php");

    }
}

?>