<?php 
include("./inc/main.php");
include("./inc/navadmin.php");
?>
<link rel="stylesheet" href="./inc/estilos.css">
<div class="cont1">
    <h3 class="p2">Lista de usuarios</h3>
</div>
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
                <td><button onclick="document.location='index.php?vista=user_update&id_persona=<?php echo $mostrar_personas['usuario_id'];?>'">Modificar</button></td>
                <td><button onclick="document.location='index.php?vista=user_delete&id_persona=<?php echo $mostrar_personas['usuario_id'];?>'">Eliminar</button></td>
            </tr>
            <?php } ?>
</table>
</div>
