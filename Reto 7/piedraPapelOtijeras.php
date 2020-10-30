<?php

require_once 'jugar.php';

if(isset($_GET['jugador1']) && isset($_GET['jugador2'])) {
    $jugador_1 = $_GET['jugador1'];
    $jugador_2 = $_GET['jugador2'];

    $ganador  = jugar($jugador_1, $jugador_2);

    if($ganador == 1) {
        echo 'El jugador 2 ganó el juego';
    } else {
        echo 'El jugador 1 ganó el juego';
    }
}