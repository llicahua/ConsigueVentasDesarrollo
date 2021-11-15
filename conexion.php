<?php
//creamos nuestra clase bd 
class BD{
    //generamos un pdo para la conxion
    private static $instancia=NULL;

    //crear una instancia a partir de una conexion -crearInstancia-
    public static function crearInstancia(){

        if(!isset( self::$instancia)){

            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;


            //creamos nuestra instancia de conexion
            self::$instancia= new PDO('mysql:host=localhost;dbname=empleados','root','',$opcionesPDO);
            
        }
        return self::$instancia;
    }

}
?>