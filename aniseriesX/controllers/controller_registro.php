<?php
    require_once "model/conexion.php";
    require_once "model/log.php";

    $registro = new Log();
   // $log= $registro->registrar($nombre_usuario,$password);
   class controller_registro{
       function __construct(){
           echo "Dentro del controlador";
       }
   }

    require_once "view/registro/index.php"
?>