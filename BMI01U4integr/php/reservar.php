<?php
include '../inc/textos.php';
include '../inc/main.php';

//recuperación de datos del formulario
$apellido = $_POST['apellido'];
$nombres = $_POST['nombres'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$cantidad_p = $_POST['cantidad_p'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$fechaArg = date("d-m", strtotime($fecha));


try {


    // Utiliza la función filter_var para validar la dirección de correo electrónico
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        //conexion BD mediante la función definida en main.php        
        mysqli_query(conexion(), "INSERT INTO reservas VALUES (DEFAULT, '$apellido','$nombres','$email','$telefono','$cantidad_p','$fecha','$hora') ");
        mysqli_close(conexion());

        //enviar un email a quien realiza la reserva
        // Define los encabezados, incluyendo el nombre del remitente
        $headers = 'From: ' . $nombre_principal . ' <' . $email_principal . '>' . "\r\n" . 'Reply-To: ' . $email_principal . "\r\n";
        mail($email, 'Reserva en ' . $nombre_principal, "Estimado/a $nombres $apellido,\r\n Hemos reservado una mesa para $cantidad_p personas, para el día $fechaArg a la hora $hora.\r\n ¡Serán bienvenidos!\r\n", $headers);

        //confirmación de la reserva
        header("Location: ../index.php?vista=reserva_confirmada&nombres=$nombres&apellidos=$apellidos&fecha=$fechaArg&hora=$hora&cantidad_p=$cantidad_p ");
    } else {
        header("Location: ../index.php?vista=mje_email");
    }
} catch (Exception $e) {
    //echo 'Excepción capturada: ' . $e->getMessage();
    header("Location: ../index.php?vista=mje_error");
}
