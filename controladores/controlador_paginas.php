<?php

class ControladorPaginas{
   //acedemos a las vistas/paginas  inicio-error 
    public function inicio(){
        //accede a la vista y cargamos la pagina/inicio
        include_once("vistas/paginas/inicio.php");

    }

    public function error(){
        //accede a la vista y cargamos la pagina/error
        include_once("vistas/paginas/error.php");
        
    }
}
?>

