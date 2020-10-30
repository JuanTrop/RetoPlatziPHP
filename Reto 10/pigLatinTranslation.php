<?php

require_once 'pigLatinTraslate.php';

if(isset($_POST['latintxt'])){
    $latintxt = $_POST['latintxt'];
    
    pigLatinTraslate($latintxt);


}