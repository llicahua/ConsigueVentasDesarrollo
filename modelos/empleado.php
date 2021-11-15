<?php

//utiliza la conexion para incluir la informacion a la BD
//interactua con todo los modelos para agregar y ingresar a la BD
class Empleado{

    public $id;
    public $nombre;
    public $correo;

    //constructor
    public function __construct($id,$nombre,$correo) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
        
    }
    //Consulta se va crear a traves de objs

    //Creando consulta
    public static function consultar(){
        $listaEmpleados=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM empleados");

        foreach($sql->fetchAll() as $empleado){
            //recupera los datos y almacena en un array
            
            $listaEmpleados[]= new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
            
            
        }
        //retorna los datos en una lista
        return $listaEmpleados;
    }
    

    public static function crear($nombre, $correo){
        //crear una variable para almacenar la conexion 
        $conexionBD=BD::crearInstancia();
         
        //prepare() ejecutara una instruccion sql
        $sql= $conexionBD->prepare("INSERT INTO empleados(nombre, correo) VALUES(?,?)");
        //almacenamos los valores en un array 
        $sql->execute(array($nombre,$correo));

    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM empleados WHERE id=?");         
        $sql->execute(array($id));
        
    }

    public static function buscar($id){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("SELECT * FROM empleados WHERE id=?");         
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
        
    }

    public static function editar($id,$nombre,$correo){
          
          $conexionBD=BD::crearInstancia();
         
          
          $sql= $conexionBD->prepare("UPDATE empleados SET nombre=?, correo=? WHERE id=? ");
         
          $sql->execute(array($nombre,$correo,$id));

    }
}

?>