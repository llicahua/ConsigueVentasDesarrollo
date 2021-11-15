<?php
//ruteador es aquel q cambia controles y accede ciertas acciones
//cambia de una clase / accion a otra

//obtenemos por la URL
//solicitud q nos hacen  $controlador ,$accion lo q tenemos por la URL

//                              concatenamos ,forma dinamica el controlador q crearemos
//                              $controlador es el contenedor de pagina
include_once("controladores/controlador_".$controlador.".php");
// el obj tiene el controlador + el nomb de controlador
$objControlador="Controlador".ucfirst($controlador);
//                              1ra letra mayucula - ucfirst -
//instanciamos ControladorPaginas
$controlador = new $objControlador;

//accedemos inicio
//lo q se pida en la url , se va tener q cumplir 
$controlador->$accion();

?>