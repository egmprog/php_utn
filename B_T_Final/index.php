<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "./inc/head.php"; ?>
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
    if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {
        
        //cerrar sesion forzadamente como seguridad para usuarios no logeados
        if ((!isset($_SESSION['usuario']) || $_SESSION['usuario'] == '')) {
            include "./inc/nav.php";
            include "./vistas/logout.php";
            include "./inc/footer.php";
            exit();
        }
        

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