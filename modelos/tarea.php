<?php 

class Tarea{

    public $id;
    public $tarea;
    public $descripcion;
    public $fecha_vencimiento;
    public $categoria;
    public $estado;
    public $fecha_alta;

    public function __construct($id, $tarea, $descripcion, $fecha_vencimiento, $categoria, $estado, $fecha_alta){
        $this->id=$id;
        $this->tarea=$tarea;
        $this->descripcion=$descripcion;
        $this->fecha_vencimiento=$fecha_vencimiento;
        $this->categoria=$categoria;
        $this->estado=$estado;
        $this->fecha_alta=$fecha_alta;
    }

    public static function consultar(){
        $listaTareas=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM tareas");

        foreach($sql->fetchAll() as $tarea){

            $listaTareas[]= new Tarea($tarea['id'], $tarea['tarea'], $tarea['descripcion'], $tarea['fecha_vencimiento'], $tarea['categoria'], $tarea['estado'], $tarea['fecha_alta']);

        }

        return $listaTareas;

    }
    

    public static function crear($tarea, $descripcion, $fecha_vencimiento, $categoria, $estado){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO tareas(tarea, descripcion, fecha_vencimiento, categoria, estado) VALUES(?,?,?,?,?)");
        $sql->execute(array($tarea, $descripcion, $fecha_vencimiento, $categoria, $estado));

    }

    

    public static function eliminar($id){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("DELETE FROM tareas WHERE id=? ");
        $sql->execute(array($id));

    }

    public static function buscar($id){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("SELECT * FROM tareas WHERE id=? ");
        $sql->execute(array($id));
        $tarea=$sql->fetch();
        return new Tarea($tarea['id'], $tarea['tarea'], $tarea['descripcion'], $tarea['fecha_vencimiento'], $tarea['categoria'], $tarea['estado'], $tarea['fecha_alta']);

    }

    public static function editar($id, $tarea, $descripcion, $fecha_vencimiento, $categoria, $estado, $fecha_alta){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE tareas SET tarea=?, descripcion=?, fecha_vencimiento=?, categoria=?, estado=?, fecha_alta=? WHERE id=?");
        $sql->execute(array($tarea, $descripcion, $fecha_vencimiento, $categoria, $estado, $fecha_alta, $id));
        
    }

    
}

?>