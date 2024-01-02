<?php
require ('soporte.php');
require ('juego.php');

$mijuego = new juego("Final Fantasy", 21, 2.5, "Playstation",1,1); 
$mijuego->imprime_caracteristicas(); 

//esta línea daría un error porque no se permite acceder a un atributo private del objeto 
//echo "<br>Jugadores: " . $mijuego->min_num_jugadores; 
//habria que crear un método para que acceda a los atributos private 
$mijuego->imprime_jugadores_posibles(); 

echo "<p>"; 
$mijuego2 = new juego("GP Motoracer", 27, 3, "Playstation II",1,2); 
echo "<b>" . $mijuego2->titulo . "</b>"; 
$mijuego2->imprime_jugadores_posibles(); 


?>