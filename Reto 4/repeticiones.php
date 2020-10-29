<?php

require_once 'hallarRepeticiones.php';

if(isset($_GET['palabra']) && isset($_GET['repeticiones'])) {
    $palabra = $_GET['palabra'];
    $repeticiones = $_GET['repeticiones'];

    echo hallarRepeticiones($palabra, $repeticiones);
} else {
    echo "Ha habido un problema con los parametros";
}