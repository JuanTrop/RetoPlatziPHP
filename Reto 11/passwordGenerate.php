<?php

function passwordGenerate($digitos, $mayusculas) {
    
    $pass =' ';
     $limit = intval($digitos) ;

        for($i = 0; $i < $limit; $i++ ){

            $c = random_int(0,255);
                if($c > 90 || $c < 65){
                    $pass .= chr($c); 
                }else {
                    continue;
                }
        }

    return trim($pass);
}