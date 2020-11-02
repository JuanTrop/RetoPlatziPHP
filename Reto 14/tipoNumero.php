<?php

require_once 'getTipoNumero.php';

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];

    echo getTipoNumero($numero);
}