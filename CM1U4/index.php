<?php
session_start();
include "./views/inc/head.php";


//si la vista no está definida --> muestra home.php
if ((!isset($_GET['vista'])) || $_GET['vista'] == "") {
    $_GET['vista'] = 'home';
    require_once "controllers/viewsController.php";
    $vistaActual = new viewsController();
    $vistaActual->CtrObtenerVista();
}

//si la vista está definida --> muestra la vista correspondiente
if (is_file("./views/contents/" . $_GET['vista'] . ".php")) {

    /*
    //cerrar sesion forzadamente como seguridad para usuarios no logeados
    if ((!isset($_SESSION['usuario']) || $_SESSION['usuario'] == '')) {
        include "./views/inc/nav.php";
        include "./views/contents/logout.php";
        include "./views/inc/footer.php";
        exit();
    }
    */

    require_once "controllers/viewsController.php";
    $vistaActual = new viewsController();
    $vistaActual->CtrObtenerVista();
} else {
        include "./views/contents/404.php";
    }

