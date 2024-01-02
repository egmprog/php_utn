<?php 
if(!isset($_SESSION['usuario'])){
header('Location: ../index.php');
}
include "./inc/navadmin.php";
include "./inc/main.php";

$menu_id_ed=$_GET['menu_id_ed'];

$revisar=mysqli_query(conexion(), "SELECT * FROM menu WHERE menu_id='$menu_id_ed' ");
$mostrar_menu=mysqli_fetch_assoc($revisar);
    

?>
<div class="cont1">
    <h2>Actualice una opción del manú</h2>
</div>

<div class="cont1">
    <form action="./php/menu_borrar.php" method="post" enctype="multipart/form-data"><br>
        <input type="hidden" name="menu_id" value="<?php echo $menu_id_ed ?>">
        <label for="menu_p_ppal">Ingrese el nombre del plato principal</label><br>
        <input type="text" name="menu_p_ppal" style="width: 300px;" value="<?php echo $mostrar_menu['menu_p_ppal']?>"><br>
        <label for="menu_ingred">Ingrese los ingredientes del plato principal</label><br>
        <textarea name="menu_ingred" id="menu_ingred" cols="38" rows="10"><?php echo $mostrar_menu['menu_ingred']?></textarea><br>
        <label for="menu_precio">Ingrese el precio del plato</label><br>
        <input type="text" name="menu_precio" value="<?php echo $mostrar_menu['menu_precio']?>"><br>
        <label for="menu_img">Suba una imagen del plato principal</label><br>
        
        <img id="menu_img" src="<?php echo $mostrar_menu['menu_img']?>" alt="Imagen" style="max-width: 100%;"><br><br>
        
        
        <label for="menu_estado">El estado actual de la publicación es:</label>
        <label for=""><strong><?php echo $mostrar_menu['menu_estado']?></strong></label><br><br>
        
        <label for=""><strong>¿Está seguro que desea eliminar esta información?</strong></label><br>
        <input type="submit" value="Borrar definitivamente"><br>

    </form>
</div>