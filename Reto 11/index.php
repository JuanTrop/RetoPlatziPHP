<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 11 PlatziCodingChallenge</title>
</head>
<body>
    <form action="password.php" method='get'>
        <label for="digitos_pass">Ingresa la cantidad de digitos de la password: </label>
        <br>
        <input type="text" name="digitos_pass" id="pass_field">
        <br>
        <label for="mayus_cbx">Mayusculas: </label>
        <input type="checkbox" id="mayus_cbx" values="1">
        <br>
        <input type="submit" value="Generar contraseña">
    </form>
</body>
</html>