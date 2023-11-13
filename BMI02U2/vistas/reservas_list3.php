<!-------tercer día---------------------------------------->
<div class="cont1">
<?php
date_default_timezone_set("America/Buenos_Aires");
$fecha_hoy = date("Y-m-d");
$fecha_considerada=date('Y-m-d', strtotime($fecha_hoy . ' +2 days'));

echo "<strong>Fecha: ".date('d-m-Y', strtotime($fecha_considerada))."</strong><br>";



$consulta_reservas=mysqli_query(conexion(),"SELECT * FROM reservas WHERE fecha='$fecha_considerada' ORDER BY fecha, hora ASC");
$contar_rtas=mysqli_query(conexion(),"SELECT COUNT(*) as fecha FROM reservas WHERE fecha = '$fecha_considerada'");
$cantidad_rtas=mysqli_fetch_assoc($contar_rtas);
$cantidad = $cantidad_rtas['fecha'];

if($cantidad>0){
    /*
while($mostrar_reservas=mysqli_fetch_assoc($consulta_reservas)){ 
    
   

}
*/

?>
<div class="cont1">
    <table class="cont4">
    <tr>
     
        <td>Hora</td>
        <td>Cantidad Personas</td>
        <td>Persona</td>
        <td>Teléfono</td>
        <td>Correo electrónico</td>
        
    </tr>

<?php
$cont2=0;
$cont4=0;
$cont6= 0;
$cont8= 0;
$cont10= 0;

    while($mostrar_reservas=mysqli_fetch_assoc($consulta_reservas)){ 
            
            date_default_timezone_set("America/Buenos_Aires");
            $fecha_hoy = date("Y-m-d");
            $timestamp_reserva = strtotime($mostrar_reservas['fecha']);
            $timestamp_hoy = strtotime($fecha_hoy);
            
            
            if(($timestamp_reserva == ($timestamp_hoy)+172800)){
                $fechareserva=date("d-m-Y",strtotime($mostrar_reservas['fecha']));
                ?>

            <tr>
               
                <td><?php echo date("H:i", strtotime($mostrar_reservas['hora'])) ?></td>
                <td><?php echo $mostrar_reservas['cantidad_p']?></td>
                <td><?php echo $mostrar_reservas['apellido'].", ".$mostrar_reservas['nombres']?></td>
                <td><?php echo $mostrar_reservas['telefono']?></td>
                <td><?php echo $mostrar_reservas['email']?></td>
               
            </tr>
            <?php 
                if($mostrar_reservas['cantidad_p']<=2){
                    $cont2++;
                }
                if($mostrar_reservas['cantidad_p']>2&&$mostrar_reservas['cantidad_p']<=4){
                    $cont4++;
                }
                if($mostrar_reservas['cantidad_p']>4&&$mostrar_reservas['cantidad_p']<=6){
                    $cont6++;
                }
                if($mostrar_reservas['cantidad_p']>6&&$mostrar_reservas['cantidad_p']<=8){
                    $cont8++;
                }
                if($mostrar_reservas['cantidad_p']>8){
                    $cont10++;
                }

            } 
       
        }
            
            
                
            if($cont2!=0){
                echo "Se han reservado ".$cont2." mesas para 1 o 2 personas"."<br>";
            }
            if($cont4!=0){
                echo "Se han reservado ".$cont4." mesas para 3 o 4 personas"."<br>";    
            }
            if($cont6!=0){
                echo "Se han reservado ".$cont6." mesas para 5 o 6 personas"."<br>";
            }
            if($cont8!=0){
                echo "Se han reservado ".$cont8." mesas para 7 o 8 personas"."<br>";
            }
            if($cont10!=0){
                echo "Se han reservado ".$cont10." mesas para 10 o más personas"."<br>";
            }            
            echo "Detalle de las reservas:";


        }else{
            echo "No hay reservas para esta fecha";
        }
            ?>
            
</table><br><br>
</div>
</div>
