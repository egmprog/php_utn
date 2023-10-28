<?php 
include "./inc/head.php";
include "./inc/nav.php"; 
include "./inc/textos.php"; 
?>

<!--
<link rel="stylesheet" href="../inc/estilos.css">
-->

<div class="cont1">
    <h3 class="p3">Acceda con sus credenciales</h3>
</div>
<div class="cont1">
    <form action="./php/acceso.php" method="post">
    <input type="text" name="usuario" placeholder="Usuario" require><br>
    <input type="password" name="clave" placeholder="Contraseña" require><br>
    <button type="submit">Acceder</button>
    </form>
</div>


<?php 
include "./inc/footer.php";

?>