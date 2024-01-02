<?php 
<<<<<<< HEAD
session_start();
=======
session_start(); 
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
?>
<!DOCTYPE html>
<html lang="es">

<head>
<<<<<<< HEAD
    <?php include "./inc/head.php"; ?>
=======
    <?php include "./inc/head.php";?>
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
</head>

<body>
    <?php
    //si la vista no está definida --> muestra home.php
    if ((!isset($_GET['vista'])) || $_GET['vista'] == "") {
        $_GET['vista'] = 'home';

        include "./inc/nav.php";
        include "./vistas/" . $_GET['vista'] . ".php";
        include "./inc/footer.php";
        exit;
    }

    //si la vista está definida y ella no es login, ni 404 --> muestra la vista correspondiente
<<<<<<< HEAD
    if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {
        
        //cerrar sesion forzadamente como seguridad para usuarios no logeados
        if ((!isset($_SESSION['usuario']) || $_SESSION['usuario'] == '')) {
            include "./inc/nav.php";
            include "./vistas/logout.php";
            include "./inc/footer.php";
            exit();
        }
        
=======
    if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404" ) {
        

        //cerrar sesion forzadamente como seguridad para usuarios no logeados (excepto para las páginas: home, menu, ver comentarios, confirmacion de reserva y reserva)
        if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "menu" && $_GET['vista'] != "reserva" && $_GET['vista'] != "home" && $_GET['vista'] != "coment_ver" && $_GET['vista'] != "reserva_confirmada" && $_GET['vista'] != "comentario" && $_GET['vista'] != "coment_ok" && $_GET['vista'] != "mje_errorlogin") {


                if ((!isset($_SESSION['usuario']) || $_SESSION['usuario'] == '')) {
                    include "./inc/nav.php";
                    include "./vistas/home.php";
                    include "./inc/footer.php";
                    exit();
                }
        }

>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a

        include "./inc/nav.php";
        include "./vistas/" . $_GET['vista'] . ".php";
        include "./inc/footer.php";
        
    } else {
        if ($_GET['vista'] == "login") {
            include "./vistas/login.php";
        } else {
            include "./vistas/404.php";
        }
    }



    ?>
</body>

</html>