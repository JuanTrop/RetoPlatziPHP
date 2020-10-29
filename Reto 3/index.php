<!--
¿Sabes cuántos segundos hay en 32 horas y 20 minutos? No te preocupes, yo tampoco. Para eso tenemos a las computadoras.
El reto del día de hoy es escribir un programa que tome como parámetros las horas y los minutos y que nos calcule los segundos. ¿En cuántos lenguajes de programación puedes escribir este programa?

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 5 PlatziCodingChallenge</title>
</head>
<body>
    <form action="segundos.php" method='get'>
        <label for="horas">Horas: </label>
        <input type="text" name="horas" id="horas_entrada">
        <br>
        <label for="altura">Minutos: </label>
        <input type="text" name="minutos" id="minutos_entradas">
        <br>
        <input type="submit" value="Hallar segundos">
    </form>
</body>
</html>