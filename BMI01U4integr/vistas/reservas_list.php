<?php
include("./inc/main.php");
include("./inc/navadmin.php");
?>


<link rel="stylesheet" href="./inc/estilos.css">
<div class="cont1">
    <h3 class="p2">Lista de reservas para hoy y dos días siguientes</h3>
</div>
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
$consulta_reservas=mysqli_query(conexion(),"SELECT * FROM reservas ORDER BY fecha, hora ASC");

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
            if($timestamp_reserva == $timestamp_hoy){
                $fechareserva=date("d-m-Y",strtotime($mostrar_reservas['fecha']))?>
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
            echo "<strong>"."Fecha ".$fechareserva." :"."<br>"."</strong>";
            echo "Se han reservado ".$cont2." mesas para 1 o 2 personas"."<br>";
            echo "Se han reservado ".$cont4." mesas para 3 o 4 personas"."<br>";
            echo "Se han reservado ".$cont6." mesas para 5 o 6 personas"."<br>";
            echo "Se han reservado ".$cont8." mesas para 7 o 8 personas"."<br>";
            echo "Se han reservado ".$cont10." mesas para 10 o más personas"."<br>";
            echo "Detalle de las reservas:";
            ?>
            
</table>
</div>
<br><br>
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
$consulta_reservas=mysqli_query(conexion(),"SELECT * FROM reservas ORDER BY fecha, hora ASC");

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
            
            
            if($timestamp_reserva == ($timestamp_hoy)+86400){
                $fechareserva=date("d-m-Y",strtotime($mostrar_reservas['fecha']))?>
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
            echo "<strong>"."Fecha ".$fechareserva." :"."<br>"."</strong>";            
            echo "Se han reservado ".$cont2." mesas para 1 o 2 personas"."<br>";
            echo "Se han reservado ".$cont4." mesas para 3 o 4 personas"."<br>";
            echo "Se han reservado ".$cont4." mesas para 3 o 4 personas"."<br>";
            echo "Se han reservado ".$cont6." mesas para 5 o 6 personas"."<br>";
            echo "Se han reservado ".$cont8." mesas para 7 o 8 personas"."<br>";
            echo "Se han reservado ".$cont10." mesas para 10 o más personas"."<br>";
            echo "Detalle de las reservas:";

            ?>
            
</table>
</div>
<br><br>
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
$consulta_reservas=mysqli_query(conexion(),"SELECT * FROM reservas ORDER BY fecha, hora ASC");

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
            
            
            if($timestamp_reserva == ($timestamp_hoy)+172800){
                $fechareserva=date("d-m-Y",strtotime($mostrar_reservas['fecha']))?>
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
            
            echo "<strong>"."Fecha ".$fechareserva." :"."<br>"."</strong>";
            echo "Se han reservado ".$cont2." mesas para 1 o 2 personas"."<br>";
            echo "Se han reservado ".$cont4." mesas para 3 o 4 personas"."<br>";
            echo "Se han reservado ".$cont4." mesas para 3 o 4 personas"."<br>";
            echo "Se han reservado ".$cont6." mesas para 5 o 6 personas"."<br>";
            echo "Se han reservado ".$cont8." mesas para 7 o 8 personas"."<br>";
            echo "Se han reservado ".$cont10." mesas para 10 o más personas"."<br>";
            echo "Detalle de las reservas:";
            ?>
            
</table>
</div>
