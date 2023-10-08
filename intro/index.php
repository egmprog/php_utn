<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="body">
    <h1>Introducción PHP</h1>

    <?php 
    echo 'Para mostrar un texto';

    //comentarios
    # comentarios
    /* comentarios
    multilíneas
    */

    //variables
    $curso='Curso de PHP inicial';
    $unidades= 8;
    $arancel=8256.23;
    $fecha= "11/12/2023";

    $curso2='Curso de PHP intermedio';
    $unidades2= 10;
    $arancel2=9256.23;
    $fecha2= "11/04/2024";
    
    $unidades_total=$unidades+$unidades2;
    $arancel_total=$arancel+$arancel2;
    $valor_dolar=700;
    $arancel_total_dolar=$arancel_total/$valor_dolar
    ?>

    <section class="contenido">
    <h2><?php echo $curso ?></h2>
    <ul>
        <li>Duración:<?php echo $unidades ?></li>
        <li>Arancel:<?php echo $arancel ?></li>
        <li>Fecha inicio:<?php echo $fecha ?></li>
    </ul>

    <h2><?php echo $curso2 ?></h2>
    <ul>
        <li>Duración:<?php echo $unidades2 ?></li>
        <li>Arancel:<?php echo $arancel2 ?></li>
        <li>Fecha inicio:<?php echo $fecha2 ?></li>
    </ul>
    </section>
    <section class="totales">
    <h2><?php echo 'Total curso completo' ?></h2>
    <ul>
        <li>Duración:<?php echo $unidades_total ?></li>
        <li>Arancel:<?php echo $arancel_total ?></li>
        <li>Arancel total en dólares:<?php echo round($arancel_total_dolar)  ?></li>
    </ul>
    </section>
    </div>


</body>
</html>