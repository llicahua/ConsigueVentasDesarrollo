<?php
include_once("modelos/empleado.php");
include_once("conexion.php");
//crear una instancia de la base datos ,a partir de "BD"
BD::crearInstancia();

class ControladorEmpleados{

    public function inicio(){

       //print_r(Empleado::consultar());
        $empleados=Empleado::consultar();

        include_once("vistas/empleados/inicio.php");
    }

    public function crear(){
        //recepciono los datos por el metodo POST
        //si hay un envio
        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            Empleado::crear($nombre,$correo);
            header("Location:./?controlador=empleados&accion=inicio");
        }
        include_once("vistas/empleados/crear.php");
    }

    public function editar(){

        
       
        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];

            Empleado::editar($id,$nombre,$correo);
            header("Location:./?controlador=empleados&accion=inicio");
            
        }
        $id=$_GET['id'];
        $empleado=(Empleado::buscar($id));
        include_once("vistas/empleados/editar.php");
    }

    public function borrar(){
        print_r($_GET);
        $id=$_GET['id'];
        Empleado::borrar($id);
        header("Location:./?controlador=empleados&accion=inicio");
    }

}


?>