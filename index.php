<?php

$controlador="paginas";
$accion="inicio";

//si el usuario quiere acceder a inicio o error ,este acceda
//todos los datos recepcionados , se va canalizar dicha info
//validacion si hay solicitud por met_Get
if( isset($_GET['controlador']) && isset($_GET['accion']) ){
    //validamos si la informacion no esta vacia
    if($_GET['controlador']!="" && ($_GET['accion']!="")){
        $controlador = $_GET['controlador'];

        $accion = $_GET['accion'];

    }
    //asignamos los valores,para recepciones el valor
   // $controlador = $_GET['controlador'];

    //$accion = $_GET['accion'];

  
}
//
require_once("vistas/template.php");


?>