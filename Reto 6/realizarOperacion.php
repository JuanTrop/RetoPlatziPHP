<?php

function realizarOperacion($operador_1,$operador_2,$operacion) {
    

    if($operacion == urldecode('%2B')){
        return ($operador_1 + $operador_2);
    } elseif($operacion == '-'){
        return $operador_1 - $operador_2;
    } elseif($operacion == '*' || $operacion == 'x'){
        return $operador_1 * $operador_2;
    } else if($operacion == urlencode('/') && $operador_2 != 0) {
        echo $operador_1 / $operador_2;
    }
}