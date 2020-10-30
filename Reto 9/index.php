<?php 
session_start();
$_SESSION ['aleatorio'] = random_int(0,10); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 9 PlatziCodingChallenge</title>
</head>
<body>
    <form action="evaluarNumeroSecreto.php" method='get'>
        <label for="nsecreto">Ingresa tu numero secreto: </label>
        <input type="text" name="nsecreto" id="nsecreto_entrada">
        <br>
        <input type="submit" value="Probar">
    </form>
    <h1>Intentos: <?php 
        if(isset($_SESSION['intentos'])){
            echo $_SESSION['intentos'];
        } else {
            echo '0';
        }
    ?></h1>
</body>
</html>