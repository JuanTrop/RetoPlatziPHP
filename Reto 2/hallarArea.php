<?php

require 'areaTriangulo.php';

if(isset($_GET['base_entrada']) && isset($_GET['altura_entrada'])){

   
    $base = $_GET['base_entrada'];
    $altura = $_GET['altura_entrada'];

    echo "El area de tu triangulo es: " . hallarAreaTriangulo($base, $altura);   

}

?>