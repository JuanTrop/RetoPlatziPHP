<?php

function getNextBirthday($month, $day){
    
    $proximo_año = date('Y') +1;
    $fecha_actual = date_create(date('Y-m-d'));
    $fecha_proximo_cumpleaños = date_create(date("$proximo_año-$month-$day"));
    $diferencia_fechas = date_diff($fecha_actual,$fecha_proximo_cumpleaños);
    return $diferencia_fechas->days;
}