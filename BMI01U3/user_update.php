<?php
include("./inc/nav.php");
include ("main.php");

//recepción dei id_persona para consultar la BD
$persona=$_GET['id_persona'];

//Conección a la BD y lectura de valores
conexion();
$conexion1=mysqli_query(conexion(), "SELECT * FROM usuario WHERE usuario_id='$persona' ");
$datos_usuario=mysqli_fetch_assoc($conexion1);

?>

<link rel="stylesheet" href="./css/estilos.css">
<div class="cont1">
    <h2>Modificar usuario</h2>
</div>
<div class="cont1">
    <form action="user_update_cont.php" method="post">
    <input type="hidden" name="persona" value="<?php echo $persona ?>">
    <label for="apellidos">Apellidos</label><br>
    <input type="text" name="apellidos" value="<?php echo $datos_usuario['usuario_apellidos'] ?>" ><br>
    <label for="nombres">Nombres</label><br>
    <input type="text" name="nombres" value="<?php echo $datos_usuario['usuario_nombres'] ?>" ><br>
    <label for="email">Correo electrónico</label><br>
    <input type="text" name="email" value="<?php echo $datos_usuario['usuario_email'] ?>" ><br>
    <label for="usuario">Usuario</label><br>
    <input type="text" name="usuario" value="<?php echo $datos_usuario['usuario_usuario'] ?>" ><br><br>
    <label for="">Si no va a modificar la contaseña, deje estos campos sin completar</label><br>
    <input type="password" name="password1" placeholder="Ingrese una clave"><br>
    <input type="password" name="password2" placeholder="Repita la clave"><br><br>
    <button type="submit">Actualizar</button>
    </form>

</div>