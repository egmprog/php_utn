<?php 
include("./inc/main.php");
include("./inc/navadmin.php");
?>
<div class="cont1">
    <p>Indicar la cantidad de mesas disponibles en el local y la cantidad de sillas de cada una de ellas:</p>
</div>
<div class="cont1">
    <form action="./php/mesas_ofert.php" method="post">
        <input type="int" name="cant_mesas" placeholder="Cantidad de mesas con...">
        <input type="int" name="cant_sillas" placeholder="cantidad de sillas">
        <button name="submit">Cargar</button>

    </form>
</div>
