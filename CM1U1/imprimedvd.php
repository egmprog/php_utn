<?php
require ('soporte.php');
require ('dvd.php');

$midvd = new dvd('El Padrino',25,5,'español-ingles-frances','4:3 y 16:9');
$midvd->imprime_caracteristicas();
?>