<?php
include "../inc/main.php";

<<<<<<< HEAD
$mesa_nombre=$_POST['mesa_nombre'];
$mesa_descrip=$_POST['mesa_descrip'];
$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];
$domingo=$_POST['domingo'];
$sillas=$_POST['cant_sillas'];
$duracion_turno=$_POST['duracion_turno'];
$mesa_h_inicio=$_POST['mesa_h_inicio'];
$mesa_h_fin=$_POST['mesa_h_fin'];


$cupo=mysqli_query(conexion(), "INSERT INTO mesa SET mesa_nombre='$mesa_nombre',mesa_descrip='$mesa_descrip',lunes='$lunes',martes='$martes',miercoles='$miercoles',jueves='$jueves',viernes='$viernes',sabado='$sabado',domingo='$domingo',cant_sillas='$sillas',duracion_turno='$duracion_turno',mesa_h_inicio='$mesa_h_inicio',mesa_h_fin='$mesa_h_fin' ");

echo '
<div class="cont1">
    <h3>Datos de las mesas cargados correctamente</h3>
</div>
';
=======
$mesas=$_POST['cant_mesas'];
$sillas=$_POST['cant_sillas'];

$cupo=mysqli_query(conexion(), "INSERT INTO mesas SET cant_mesas='$mesas',cant_sillas='$sillas' ");
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a

header('Location: ../index.php?vista=mesas_list');