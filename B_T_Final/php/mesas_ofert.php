<?php
include "../inc/main.php";

$mesas=$_POST['cant_mesas'];
$sillas=$_POST['cant_sillas'];

$cupo=mysqli_query(conexion(), "INSERT INTO mesas SET cant_mesas='$mesas',cant_sillas='$sillas' ");

header('Location: ../index.php?vista=mesas_list');