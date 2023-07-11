<?php 

class Tarea{

    public static function crear($tarea, $descripcion, $fecha_vencimiento, $categoria, $estado){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO tareas(tarea, descripcion, fecha_vencimiento, categoria, estado) VALUES(?,?,?,?,?)");
        $sql->execute(array($tarea, $descripcion, $fecha_vencimiento, $categoria, $estado));

    }
}

?>