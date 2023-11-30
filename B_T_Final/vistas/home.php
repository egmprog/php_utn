<div class="cont1">
    <h3 class="p3">Bienvenidos...</h3>
    <h3 class="p3">Nuestro menú</h3>
    </div>


<?php
include "./inc/main.php";
include "./inc/head.php";
?>
<div class="container">
    <?php
    $cont = 0;

    $leer_datos = mysqli_query(conexion(), "SELECT * FROM menu");
    
    while ($mostrar_menu = mysqli_fetch_assoc($leer_datos)) { 
        if($mostrar_menu['menu_estado']=="Publicado"){

    ?>
        <div class="column">
            <div class="box">
                <img src="<?php echo $mostrar_menu['menu_img']; ?>" alt="Imagen del plato">
                <p><strong><?php echo $mostrar_menu['menu_p_ppal']; ?></strong></p>
                <p><?php echo $mostrar_menu['menu_ingred']; ?></p>
                <p>Precio: $ <?php echo $mostrar_menu['menu_precio']; ?></p>
            </div>
        </div>
        
    <?php

    // Verificar si se han mostrado dos elementos en una fila
    if ($cont % 2 === 1) {
        echo '</div><div class="container">';
    }


        $cont++;
    }}
    ?>
</div>
