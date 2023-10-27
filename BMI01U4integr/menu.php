<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./inc/head.php" ?>
</head>
<body>
    <?php include "./inc/nav.php" ?>
    <div class="cont1">
        <h3 class="p3">Menú del día</h3>
            <ul class="p1">
                <li><a href="menu.php?sugerencia=1#detalle1">Sugerencias: carnes</a></li>
                <li><a href="menu.php?sugerencia=2#detalle1">Sugerencias: vegetales</a></li>
                <li><a href="menu.php?sugerencia=3#detalle1">Sugerencias: pastas</a></li>
            </ul>
    </div>
    <?php 
        $plato_ppal="";
        $ingredientes="";
        $precio=null;
        $img="";
        define("COMPLEMENTOS","El menú del día incluye: bebida, postre y café");

        if(isset($_GET['sugerencia'])){
            switch($_GET['sugerencia']){
                case '1':
                    $plato_ppal="Churrasco de pollo grillado con papas rústicas";
                    $ingredientes="Currasco de pechuga pollo, cocido a la parrilla, acompañado de papas rústicas saborizadas con hierbas.";
                    $precio=2800;
                    $img="./img/s1.jpeg";    
                break; 
                case '2':
                    $plato_ppal="Wok de verduras";
                    $ingredientes="Verduras saltadas en aceite de olivas: cebollas, ajíes, tomates, zanahorias, zapallitos, anco, zucchini.";
                    $precio=2000;
                    $img="./img/s2.jpeg";    
                break;
                case '3':
                    $plato_ppal="Sorrentinos a la parisienne";
                    $ingredientes="Sorrentinos de jamón cocido y muzzarella, con salsa parisienne (Crema, pollo, jamón y hongos).";
                    $precio=2700;
                    $img="./img/s3.jpeg";    
                break;
            }
        };
    ?>
    <a id="detalle1"></a>
    <div class="cont2" >
        <?php
        if(isset($_GET['sugerencia'])){ ?>
        <h2 class="p2" >Descripción del menú seleccionado</h2>
        <h3 class="p3" >Plato principal:<br> <?php echo $plato_ppal ?></h3>        
        <div>
            <img  class="cont3_img" src="<?php echo $img ?>" alt="">
        </div>
        <h5 class="p5" >Ingredientes utilizados: <?php echo $ingredientes ?></h5>
        <h4 class="p4" >Precio: <?php echo "$ ".number_format($precio, 2,',', '.') ?></h4>
        <h4 class="p4" ><?php echo COMPLEMENTOS ?></h4>
        <?php } ?>
    </div>

    <?php include "./inc/footer.php" ?>
</body>
</html>