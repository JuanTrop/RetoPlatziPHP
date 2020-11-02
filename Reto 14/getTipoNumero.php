<?php

function divisible2($numero){
    return (($numero % 2) == 0);
}

/*
function divisible3($numero){
    

}


function divisible4($numero){
    if($numero % 2){
        return true;
    } else if()
}

function divisible5($numero){
    if($numero % 2){
        return true;
    } else if()
}

function divisible6($numero){
    if($numero % 2){
        return true;
    } else if()
}

function divisible7($numero){
    if($numero % 2){
        return true;
    } else if()
}

function divisible8($numero){
    if($numero % 2){
        return true;
    } else if()
}

function divisible9($numero){
    if($numero % 2){
        return true;
    } else if()
}
*/
function getTipoNumero($numero){
    $d = 0;
    while($d < 1){
        if (probarDivisor($numero)){
            $d++;
        }
    }
}