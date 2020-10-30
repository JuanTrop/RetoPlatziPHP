<?php

require_once 'calcularVolumen.php';

if(isset($_GET['radio']) && isset($_GET['altura'])) {
    $radio = $_GET['radio'];
    $altura = $_GET['altura'];

    echo floor(calcularVolumen($radio, $altura));
}