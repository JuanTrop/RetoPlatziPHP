<?php 

namespace Reto_13;

require_once 'models/Platillo.php';

session_start();
$_SESSION['platillos_ordenados'] = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 13 PlatziCodingChallenge</title>
</head>
<body>
    <form action="index.php" method="post">

        <label for="platillo">Nombre del platillo: </label>
        <input type="text" name="platillo" id="platillo_entrada">
        <br>
        <label for="precio">Precio: </label>
        <input type="text" name="precio" id="precio_entrada">
        <br>
        <label for="porcentaje">Porcentaje de propina: </label>
        <input type="text" name="porcentaje" id="porcentaje_entrada">
        <br>

        <input type="submit" value="Agregar a la cuenta">
    </form>

    <?php 
        if(isset($_POST['platillo']) && isset($_POST['precio']) && isset($_POST['porcentaje'])):
            
            $nombre = $_POST['platillo'];
            $precio = $_POST['precio'];
            $porcentaje = $_POST['porcentaje'];
            array_push($_SESSION['platillos_ordenados'], new Platillo($nombre,$precio));
            $platillos = $_SESSION['platillos_ordenados'];

    ?>
        <table>
            <thead>Platillos</thead>
            <?php foreach($platillos as $platillo): ?>
                <tr>
                    <td><?php echo $platillo->getNombre();?></td>
                    <td><?php echo $platillo->getPrecio();?></td>
                    <td><?php echo $platillo->getPropina($porcentaje);?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php endif; ?>

</body>
</html>