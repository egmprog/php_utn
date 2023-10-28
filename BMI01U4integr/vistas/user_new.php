<?php include("./inc/navadmin.php");?>

<link rel="stylesheet" href="./css/estilos.css">
<div class="cont1">
    <h2>Nuevo usuario</h2>
</div>
<div class="cont1">
    <form action="user_create.php" method="post">
    <input type="text" name="apellidos" placeholder="apellidos"><br>
    <input type="text" name="nombres" placeholder="nombres"><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="usuario" placeholder="usuario"><br>
    <input type="password" name="password1" placeholder="Ingrese una clave"><br>
    <input type="password" name="password2" placeholder="Repita la clave"><br>
    <button type="submit">Añadir usuario</button>
    </form>

</div>
