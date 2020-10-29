<!-- 
¿Recuerdas tus clases de Geometría?

Es momento de poner ese conocimiento a la práctica. El área de un triángulo se describe de la siguiente manera: A = (b * h) / 2 .

El reto del día de hoy es escribir un programa que tome la base y la altura como parámetros y calcule el área del triángulo. Bonus: El programa debe determinar si el triángulo es isósceles, equilátero o escaleno.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2 PlatziCodingChallenge</title>
</head>
<body>
    <form action="hallarArea.php" method='get'>
        <label for="base">Base: </label>
        <input type="text" name="base_entrada" id="base_triangulo">
        <label for="altura">Altura: </label>
        <input type="text" name="altura_entrada" id="altura_triangulo">
        <input type="submit" value="Hallar Area">
    </form>
</body>
</html>