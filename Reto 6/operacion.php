<?php

require_once 'realizarOperacion.php';

if(isset($_GET['operador1']) && isset($_GET['operador2']) && isset($_GET['operacion'])) {
   $operador_1 = $_GET['operador1'];
   $operador_2 = $_GET['operador2'];
   $operacion = $_GET['operacion'];

   echo realizarOperacion($operador_1,$operador_2,$operacion); 
}