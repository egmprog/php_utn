<?php 
include("main.php");
include("./inc/nav.php");
?>
<div class="cont1">
    <h2 class="p2">Lista de usuarios</h2>
</div>
<link rel="stylesheet" href="./css/estilos.css">
<div class="cont1">
    <table class="cont4">
    <tr>
        <td>#</td>
        <td>Apellidos y nombres</td>
        <td>Correo electronico</td>
        <td colspan="2">Opciones</td>
    </tr>



<?php
$leer_datos=mysqli_query(conexion(),"SELECT * FROM usuario ORDER BY usuario_id DESC");

        while($mostrar_personas=mysqli_fetch_assoc($leer_datos)){ ?>
            <tr>
                <td><?php echo $mostrar_personas['usuario_id']?></td>
                <td><?php echo $mostrar_personas['usuario_apellidos'].", ".$mostrar_personas['usuario_nombres']?></td>
                <td><?php echo $mostrar_personas['usuario_email']?></td>
                <td><button onclick="document.location='user_update.php?id_persona=<?php echo $mostrar_personas['usuario_id'];?>'">Modificar</button></td>
                <td><button onclick="document.location='user_delete.php?id_persona=<?php echo $mostrar_personas['usuario_id'];?>'">Eliminar</button></td><br>
            </tr>
            <?php } ?>
</table>
</div>
