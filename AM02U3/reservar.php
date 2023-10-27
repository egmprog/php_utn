<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./inc/head.php" ?>
</head>
<body>
    <?php include "./inc/nav.php" ?>


<?php

//recuperación de datos del formulario
$apellido=$_POST['apellido'];
$nombres=$_POST['nombres'];
$cantidad_p=$_POST['cantidad_p'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$fechaArg = date("d-m", strtotime($fecha));

//conexion BD
$conexion=mysqli_connect('localhost','root','','restaurant01') or exit ("No se pudo conectar a la BD");
mysqli_query($conexion, "INSERT INTO reservas VALUES (DEFAULT, '$apellido','$nombres','$cantidad_p','$fecha','$hora') ");
mysqli_close($conexion);

echo '
<div>
    <h3 class="p3">Su reserva ha sido efectuada con éxito</h3>
    <p class="p1">Estimado/a '; echo $nombres." ".$apellido." hemos reservado una mesa para ". $cantidad_p." personas, para el día ". $fechaArg." a la hora ".$hora; 
    echo '</p>
    <p class="p1">Gracias por elegirnos! Los esperamos!</p>
</div>
';

?>

<!--confirmación de la reserva 

<div>
    <h3 class="p3">Su reserva ha sido efectuada con éxito</h3>
    <p class="p1">
        Estimado/a <?php  $nombres." ".$apellido?> hemos reservado una mesa para <?php $cantidad_p ?> personas, para el día <?php $fecha?> a la hora <?php $hora?>
    </p>
    <p class="p1">Gracias por elegirnos! Lo esperamos!</p>

</div>
-->
</body>
</html>
