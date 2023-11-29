<?php
include "../inc/main.php";

$mesas=$_POST['cant_mesas'];
$sillas=$_POST['cant_sillas'];

$cupo=mysqli_query(conexion(), "INSERT INTO mesas SET cant_mesas='$mesas',cant_sillas='$sillas' ");

echo '
<div class="cont1">
    <h3>Datos de las mesas cargados correctamente</h3>
</div>
';

header('Location: ../index.php?vista=mesas_list');