<!--
11. Generador de contraseñas
Un ejercicio que siempre resulta útil para aplicar aleatoriedad es la generación de contraseñas. Básicamente debes crear un string de caracteres al azar tomando en cuenta las siguientes condiciones que el usuario debe poder elegir:

Longitud de la contraseña.
Si incluirá minúsculas, mayúsculas, números y caracteres especiales (incluyendo espacios).

-->

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