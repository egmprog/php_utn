<<<<<<< HEAD
<?php 
include "./inc/main.php";



//Ingresar la fecha en que se desea realizar la reserva
?>
    <div class="cont1">
    <p class="p1">Por favor, complete la solicitud de su reserva aquí:</p>
    </div>


    <div class="cont1">
        <form action="#" method="post">
        <label for="fecha">Seleccione la fecha de la reserva:</label><br>      
        <input type="date" name="fecha" >
        <input type="submit" value="Continuar">
        </form>
    </div>

    <?php 
    
    try {
        if (!isset($_POST['fecha'])) {
            throw new Exception("Seleccionar una fecha");
        }

    $fecha=$_POST['fecha'];
    $disponibilidad_fecha=mysqli_query(conexion(),"SELECT fecha FROM oferta WHERE fecha='$fecha' ");
    $datos_fecha=mysqli_fetch_assoc($disponibilidad_fecha);
    
    if(isset($datos_fecha)){
        echo'
        <div class="cont1">
         <br>Puede haber disponibilidad en esa fecha<br>
         '.date("d-m-Y", strtotime($fecha)).'
         </div>
         ';
    }else{
        echo'
        <div class="cont1">
         <br>NO es posible realizar una reserva en esa fecha<br>
         No se ha habilitado la agenda para ese día<br>
         Vuelva a intentarlo próximanente<br>
         </div>
         ';
    }
    }catch (Exception $e) {
        echo '
        <div class="cont1">
            <br>Seleccionar una fecha<br>
        </div>
        ';
    }
    

    

    //solicitar cantidad de personas
    ?>
    <div class="cont1">
        <br><br>
        <form action="#" method="post">
        <label for="cant_personas">¿Para cuántas personas es la mesa que desea reservar?</label><br>      
        <input type="int" name="cant_personas" >
        <input type="submit" value="Continuar">
        </form>
    </div>

    <?php
    try {
        if (!isset($_POST['cant_personas'])) {
            throw new Exception("Indique la cantidad de personas");
        }
        
        $cant_personas=$_POST['cant_personas'];
        echo'
        <div class="cont1">
         <br>Una mesa para '.$cant_personas.' personas <br>
         </div>
         ';

    
    $disponibilidad_mesa=mysqli_query(conexion(),"SELECT mesa_id FROM mesa WHERE cant_sillas='$cant_personas' ");
    $datos_mesa=mysqli_fetch_assoc($disponibilidad_mesa);

    
    if(isset($datos_mesa)){

        echo'
        <div class="cont1">
         <br>Está disponible la mesa<br>
         </div>
         ';

        $reservar=mysqli_query(conexion(),"INSERT INTO reserva SET fecha='$fecha',mesa_id='$datos_mesa' ");
        
        if($reservar){
        echo'
        <div class="cont1">
         <br>Se ha realizado la reserva<br>
         </div>
         ';
        }else{
            echo'
            <div class="cont1">
             <br>No se ha realizado la reserva<br>
             </div>
             '; 
        }
    }else{
        echo'
        <div class="cont1">
         <br>Hubo un inconveniente<br>         
         </div>
         ';
    }
    }catch (Exception $e) {
        echo '
        <div class="cont1">
            <br>Indique la cantidad de personas<br>
        </div>
        ';
    }
    
/*
    //verificar que disponibilidad hay en esa fecha
    $disponibilidad_dia=mysqli_query(conexion(),"SELECT dia_semana FROM oferta WHERE fecha='$fecha' ");
    $datos_dia=mysqli_fetch_assoc($disponibilidad_dia);

  */  

    ?>


    <!--
=======


    <div class="cont1">
    <p class="p1">Por favor, complete la solicitud de su reserva aquí:</p>
    </div>
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
    <div class="cont1">
    <form action="./php/reservar.php" method="post" class="p1">
    <input type="text" name="apellidos" placeholder="Apellidos"><br>    
    <input type="text" name="nombres" placeholder="Nombres"><br>    
    <input type="text" name="email" placeholder="Correo electrónico"><br>    
    <input type="text" name="telefono" placeholder="Teléfono de contacto"><br>    
    <input type="int" name="cantidad_p" placeholder="Cantidad de personas"><br>    
    <input type="date" name="fecha" placeholder="Fecha de la reserva">
    <label for="fecha">Seleccione la fecha de la reserva</label><br>               
    <input list="hora" name="hora" placeholder="Hora de la reserva"><br><br>
                    <datalist id="hora">
                        <option value="12:00">
                        <option value="13:30">
                        <option value="20:00">
                        <option value="21:30">
                        <option value="23:00">
                    </datalist>   
    
    <input type="submit" value="Realizar la reserva">
             
    </form>
    </div>
<<<<<<< HEAD

=======
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
