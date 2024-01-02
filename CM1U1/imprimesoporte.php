<?php
require ('soporte.php');

$soporte1 = new soporte("Los Intocables",22,6); 
echo "<b>" . $soporte1->titulo . "</b>"; 
echo "<br>Precio: " . $soporte1->dame_precio_sin_iva() . " pesos"; 
echo "<br>Precio IVA incluido: " . $soporte1->dame_precio_con_iva() . " pesos".'<br/>'; 

$soporte2 = new soporte("Lo que el viento se llevo",35,6); 
$soporte2->imprime_caracteristicas(); 
echo "<br>Precio IVA incluido: " . $soporte1->dame_precio_con_iva() . " pesos"; 

?>