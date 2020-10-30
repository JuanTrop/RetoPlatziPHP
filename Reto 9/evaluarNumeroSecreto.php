<?php
session_start();

if(isset($_GET['nsecreto'])) {

    $nsecreto_user = $_GET['nsecreto'];
    $numero_secreto = $_SESSION['aleatorio'];


    if($nsecreto_user == $numero_secreto){
        echo "¡Adivinaste!";
    } else {
        $_SESSION['intentos'] = $_SESSION['intentos'] + 1;
        header("Location:http://localhost:3000/RetoPlatziPHP/Reto%209/index.php");
    }
}