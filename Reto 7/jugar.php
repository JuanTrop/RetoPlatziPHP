<?php

function jugar($jugador1, $jugador2){
    if($jugador1 == 'tijeras' && $jugador2 == 'piedra'){
        return 1;
    } else {
        return 0;
    }
}