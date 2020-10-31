<?php

require_once 'getNextBirthday.php';

if(isset($_GET['month']) && isset($_GET['day'])) {
    
    $month = $_GET['month'];
    $day = $_GET['day'];

    echo getNextBirthday($month, $day);
}