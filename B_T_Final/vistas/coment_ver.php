<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<div class="cont1">
<h3>Comentarios anteriores:</h3>
<?php

$archivo="./docs/comentarios.txt";

 // Verifica si el archivo existe
 if (file_exists($archivo)) {

 // Abre el archivo en modo lectura
    $leer = fopen($archivo, 'r');
  
    if ($leer) {
        
        // Lee y muestra el contenido del archivo línea por línea
        while (($linea = fgets($leer)) !== false) {
            echo $linea;            
            //echo htmlspecialchars($linea); // Evita la interpretación de HTML
            echo "<br>";
        }

        fclose($leer); // Cierra el archivo
    } else {
        echo "No se pudo abrir el archivo.";
    }
} else {
    echo "El archivo no existe.";
}



?>


    
</div>


</body>
</html>
