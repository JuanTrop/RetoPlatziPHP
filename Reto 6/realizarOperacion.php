<?php

function realizarOperacion($operador_1,$operador_2,$operacion) {
    
    $resultado = 0;

    if($operacion == '+'){
        $resultado =  $operador_1 + $operador_2;
    } elseif($operacion == '-'){
        $resultado = $operador_1 - $operador_2;
    } elseif($operacion == '*' || $operacion == 'x'){
        $resultado = $operador_1 * $operador_2;
    } else if($operacion == '/' && $operador_2 != 0) {
        $resultado = $operador_1 / $operador_2;
    }

    return $resultado;
}