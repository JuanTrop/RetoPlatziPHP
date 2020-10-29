<?php

require_once 'hallarSegundos.php';

if(isset($_GET['horas']) && isset($_GET['minutos'])) {
    $horas = $_GET['horas'];
    $minutos = $_GET['minutos'];

    echo hallarSegundos($horas, $minutos);
} else {
    echo "Ha habido un problema con los parametros";
}