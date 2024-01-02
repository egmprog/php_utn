<?php
include "../inc/main.php";

$nueva_fecha=$_POST['nueva_fecha'];

$nueva_mesa=mysqli_query(conexion(), "INSERT INTO oferta SET fecha='$nueva_fecha' ");

//lo siguiente se ocupa de rellenar automáticamente el campo 'dia_semana' de la tabla 'oferta'
$verFecha = "SELECT fecha, DAYNAME(fecha) AS dia_semana FROM oferta";
$resultSelect = conexion()->query($verFecha);

// completa los valores en la BD
$sqlUpdate = "UPDATE oferta SET dia_semana = DAYNAME(fecha)";
$resultUpdate = conexion()->query($sqlUpdate);

header('Location: ../index.php?vista=fechas_habilitadas');