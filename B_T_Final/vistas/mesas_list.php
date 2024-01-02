<?php include "./inc/navadmin.php"   ?>
<div class="cont1">
    <h2>Oferta de mesas</h2>
</div>


<div class="cont1">
    <table class="cont4">
    <tr>
        <td>Num</td>
        <td>Nombre mesa</td>
        <td>Cant sillas</td>
        <td>Descripción</td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miércoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
        <td>Sábado</td>
        <td>Domingo</td>
        <td>Duracion turno (min)</td>
        <td>Hora incio</td>
        <td>Hora finalización</td>
        <td >Opciones</td>
    </tr>
<?php
include "./inc/main.php";
$leer_datos=mysqli_query(conexion(),"SELECT * FROM mesa ORDER BY mesa_nombre ASC;
");
$orden = 0;
        while($mostrar_mesa=mysqli_fetch_assoc($leer_datos)){ 
            $orden++
            ?>
            <tr>
                <td><?php echo $orden?></td>
                <td><?php echo $mostrar_mesa['mesa_nombre']?></td>
                <td><?php echo $mostrar_mesa['cant_sillas']?></td>
                <td><?php echo $mostrar_mesa['mesa_descrip']?></td>
                <td><?php 
                if($mostrar_mesa['lunes']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                if($mostrar_mesa['martes']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                if($mostrar_mesa['miercoles']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                if($mostrar_mesa['jueves']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                if($mostrar_mesa['viernes']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                if($mostrar_mesa['sabado']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                if($mostrar_mesa['domingo']!=""){
                    echo "Sí";
                }else{
                    echo "No";
                }                
                ?></td>
                <td><?php 
                echo $mostrar_mesa['duracion_turno']
                ?></td>
                <td><?php 
                echo $mostrar_mesa['mesa_h_inicio']
                ?></td>
                <td><?php 
                echo $mostrar_mesa['mesa_h_fin']
                ?></td>
                <td><button onclick="document.location='index.php?vista=mesas_delete&id_mesas=<?php echo $mostrar_mesas['id_mesas'];?>'">Eliminar</button></td>
            </tr>
        <?php } ?>
            
</table>
</div>