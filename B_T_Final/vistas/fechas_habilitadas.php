<?php include "./inc/navadmin.php";  
?>
<div class="cont1">
    <h2>Fechas habilitadas para reservar</h2>
</div>


<div class="cont1">
    <table class="cont4">
    <tr>
        <td>Num</td>
        <td>Fecha habilitada</td>
        <td>Día de la semana</td>
        <td >Opciones</td>
    </tr>
<?php
include "./inc/main.php";
$leer_datos=mysqli_query(conexion(),"SELECT * FROM oferta ORDER BY fecha ASC;");
$orden = 0;
        while($mostrar_mesa=mysqli_fetch_assoc($leer_datos)){ 
            $orden++
            ?>
            <tr>
                <td><?php echo $orden?></td>
                <td><?php echo date("d-m-Y", strtotime($mostrar_mesa['fecha']))?></td>
                <td><?php echo traducirDia($mostrar_mesa['dia_semana']);?></td>
                
                <td><button onclick="document.location='index.php?vista=mesas_delete&id_mesas=<?php echo $mostrar_mesas['id_mesas'];?>'">Eliminar</button></td>
            </tr>
        <?php } ?>
            
</table>
</div>