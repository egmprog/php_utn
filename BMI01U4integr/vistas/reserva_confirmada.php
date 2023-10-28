<?php

//recuperación de datos del formulario
$apellido=$_GET['apellidos'];
$nombres=$_GET['nombres'];
$cantidad_p=$_GET['cantidad_p'];
$fechaArg=$_GET['fecha'];
$hora=$_GET['hora'];





echo '
<div class="cont1">
    <h3 class="p3">Su reserva ha sido efectuada con éxito</h3>
    <p class="p1">Estimado/a '; echo $nombres." ".$apellido." hemos reservado una mesa para ". $cantidad_p." personas, para el día ". $fechaArg." a la hora ".$hora;
        echo '</p>
    <br>
    <p class="p1">Gracias por elegirnos! Los esperamos!</p>
</div>
';