<?php

require_once 'passwordGenerate.php';

if(isset($_GET['digitos_pass'])) {
    
    $digitos = $_GET['digitos_pass'];
    $mayusculas = '';

    echo passwordGenerate($digitos, $mayusculas);

}