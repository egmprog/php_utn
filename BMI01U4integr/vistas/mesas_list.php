<?php include "./inc/navadmin.php"   ?>
<div class="cont1">
    <h2>Oferta de mesas</h2>
</div>


<div class="cont1">
    <table class="cont4">
    <tr>
        <td>Cant mesas</td>
        <td>Cant sillas</td>
        <td >Opciones</td>
    </tr>
<?php
include "./inc/main.php";
$leer_datos=mysqli_query(conexion(),"SELECT * FROM mesas");
$suma_cant_sillas = 0;
        while($mostrar_mesas=mysqli_fetch_assoc($leer_datos)){ 
            $suma_cant_sillas += ($mostrar_mesas['cant_mesas']*$mostrar_mesas['cant_sillas']);
            ?>
            <tr>
                <td><?php echo $mostrar_mesas['cant_mesas']?></td>
                <td><?php echo $mostrar_mesas['cant_sillas']?></td>                                
                <td><button onclick="document.location='index.php?vista=mesas_delete&id_mesas=<?php echo $mostrar_mesas['id_mesas'];?>'">Eliminar</button></td>
            </tr>
        <?php } ?>
            <tr>
                <td colspan="4">Cantidad total de sillas (personas): <?php echo $suma_cant_sillas ?></td>
            </tr>
</table>
</div>