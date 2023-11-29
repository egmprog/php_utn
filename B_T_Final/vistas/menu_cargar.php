<?php 
if(!isset($_SESSION['usuario'])){
header('Location: ../index.php');
}
include "./inc/navadmin.php";
?>
<div class="cont1">
    <h2>Ingrese una nueva opción para el manú</h2>
</div>

<div class="cont1">
    <form action="./php/menu_guardar.php" method="post" enctype="multipart/form-data"><br>
        <label for="menu_p_ppal">Ingrese el nombre del plato principal</label><br>
        <input type="text" name="menu_p_ppal" style="width: 300px;"><br>
        <label for="menu_ingred">Ingrese los ingredientes del plato principal</label><br>
        <input type="text" name="menu_ingred" style="width: 300px;"><br>
        <label for="menu_precio">Ingrese el precio del plato</label><br>
        <input type="text" name="menu_precio"><br>
        <label for="menu_img">Suba una imagen del plato principal</label><br>
        <input type="file" name="image"><br><br>
        <label for="menu_img">Indique el estado de la publicación</label><br>
        <select id="menu_estado" name="menu_estado">
                <option value="Borrador" selected>Borrador</option>
                <option value="Publicado">Publicado</option>
        </select><br><br>
        <input type="submit" value="Cargar"><br>

    </form>
</div>