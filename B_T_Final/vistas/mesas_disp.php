<?php
include("./inc/main.php");
include("./inc/navadmin.php");
?>
<div class="cont1">
    <p>Habilite aquí los días para realizar reservas:</p>
</div>
<div class="cont1">
    <form action="./php/mesas_disponibles.php" method="post">
        <label for=""></label>Fecha<br>
        <input type="date" name="nueva_fecha" ><br>
        
        <button name="submit">Cargar</button>

    </form>
</div>

