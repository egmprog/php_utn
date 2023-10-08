<?php
include "./inc/head.php";
include "./inc/nav.php";
include "./inc/textos.php";


//recuperación de datos del formulario
$apellido=$_POST['apellido'];
$nombres=$_POST['nombres'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$cantidad_p=$_POST['cantidad_p'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$fechaArg = date("d-m", strtotime($fecha));


try{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];

        // Utiliza la función filter_var para validar la dirección de correo electrónico
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            //conexion BD
            $conexion=mysqli_connect('localhost','root','','restaurant01') or exit ("No se pudo conectar a la BD");
            mysqli_query($conexion, "INSERT INTO reservas VALUES (DEFAULT, '$apellido','$nombres','$email','$telefono','$cantidad_p','$fecha','$hora') ");
            mysqli_close($conexion);

            //enviar un email a quien realiza la reserva
            // Define los encabezados, incluyendo el nombre del remitente
            $headers = 'From: ' . $nombre_principal . ' <' . $email_principal . '>' . "\r\n" .'Reply-To: ' . $email_principal . "\r\n";
            mail($email,'Reserva en ' . $nombre_principal,"Estimado/a $nombres $apellido,\r\n Hemos reservado una mesa para $cantidad_p personas, para el día $fechaArg a la hora $hora.\r\n ¡Serán bienvenidos!\r\n", $headers);

            //confirmación de la reserva
            echo '
            <div class="cont1">
                <h3 class="p3">Su reserva ha sido efectuada con éxito</h3>
                <p class="p1">Estimado/a '; echo $nombres." ".$apellido." hemos reservado una mesa para ". $cantidad_p." personas, para el día ". $fechaArg." a la hora ".$hora; 
                echo '</p>
                <p class="p1">Recibirá un correo electrónico como recordatorio.</p>
                <br>
                <p class="p1">Gracias por elegirnos! Los esperamos!</p>
            </div>
            ';

        } else {
            echo'
            <div class="cont1">
            <h3 class="p3">La dirección de correo electrónico no es válida.</h3>
            <h4 class="p3">Por favor, vuelva a rellenar el formulario.</h4>
            </div>
            ';
        }
    }

}catch(Exception $e){
    //echo 'Excepción capturada: ' . $e->getMessage();
    echo '
        <h3 class="p3">Algo salió mal</h3>
        <h4 class="p3">Asegúrese de rellenar <u>todos</u> los campos del formulario</h4>
    ';
    
}
include "./inc/footer.php";
?>

