<?php
require ('soporte.php');
require ('dvd.php');

$midvd = new dvd('El Padrino',25,5,'espa�ol-ingles-frances','4:3 y 16:9');
$midvd->imprime_caracteristicas();
?>