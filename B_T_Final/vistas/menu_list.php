<?php include "./inc/navadmin.php"   ?>
<div class="cont1">
    <h2>Platos cargados como opciones para el menú</h2>
</div>


<div class="cont1">
    <table class="cont4">
    <tr>
        <td>Nombre plato</td>
        <td>Ingredientes</td>
        <td>Precio</td>
        <td>Visibilidad</td>
        <td colspan="2">Opciones</td>
    </tr>
<?php
include "./inc/main.php";

$leer_datos=mysqli_query(conexion(),"SELECT * FROM menu");
        while($mostrar_menu=mysqli_fetch_assoc($leer_datos)){ 
            ?>
            <tr>
                <td><?php echo $mostrar_menu['menu_p_ppal']?></td>
                <td><?php echo $mostrar_menu['menu_ingred']?></td>
                <td><?php echo $mostrar_menu['menu_precio']?></td>
                <td><?php echo $mostrar_menu['menu_estado']?></td>
                <td><button onclick="document.location='index.php?vista=menu_update&menu_id_ed=<?php echo $mostrar_menu['menu_id'];?>'">Editar</button></td>
                <td><button onclick="document.location='index.php?vista=menu_delete&menu_id= <?php echo $mostrar_menu['menu_id'];?>'">Eliminar</button></td>
            </tr>
        <?php } ?>
            
</table>
</div>