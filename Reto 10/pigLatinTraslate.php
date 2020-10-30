<?php

function pigLatinTraslate($text) {
    
    $pattern = '/[bcdfghjklmnpqrstvwxyz]/i';

    $text_parts = explode(" ",$text);

    for($i = 0; $i < count($text_parts); $i++){
        
        if(preg_match($pattern,$text_parts[$i]) >= 1){
            
            $c = $text_parts[$i][0];
            $sub = substr($text_parts[$i],1);
            $text_parts[$i] = $sub . $c . 'ay';
            //echo $text_parts[$i] . " ";
        }
    }

    echo implode(" ",$text_parts);
}