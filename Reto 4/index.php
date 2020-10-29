<!--
¿Sabías que para repetir las mismas instrucciones dentro de un programa podemos utilizar for loops o while loops? ¿Sabías que todo lo que puedes hacer con esas loops lo puedes hacer con recursión?
El reto del día de hoy es crear un programa que recibe como parámetro un string y la cantidad de veces que queremos repetir ese string y devuelve una cadena con las repeteciones. ¿El twist? Sólo puedes usar una función recursiva (pro tip: no olvides tu caso base).

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4 PlatziCodingChallenge</title>
</head>
<body>
    <form action="repeticiones.php" method='get'>
        <label for="palabra">Palabra: </label>
        <input type="text" name="palabra" id="palabra_entrada">
        <br>
        <label for="repeticiones">Repeticiones: </label>
        <input type="text" name="repeticiones" id="repeticion_entradas">
        <br>
        <input type="submit" value="Ver repeticiones">
    </form>
</body>
</html>