<?php

function hallarRepeticiones($palabra, $repeticiones){
    if($repeticiones == 0){
        return '0';
    } else {
        echo "$palabra";
        return hallarRepeticiones($palabra, $repeticiones-1);
    }
}