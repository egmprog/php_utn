<?php
session_start();
include("../inc/main.php");


$usuario=limpiar_cadena($_POST['usuario']);
$clave=limpiar_cadena($_POST['clave']);
$codigo_captcha=($_POST['captcha']);

$mensaje_error = "";
try{
if($codigo_captcha!=$_SESSION['codigo_captcha']){
    header('Location: ../index.php?vista=mje_errorlogin');
exit;
}

$acceder=mysqli_query(conexion(),"SELECT * FROM usuario WHERE usuario_usuario='$usuario' ");
$datos_acceso=mysqli_fetch_assoc($acceder);





    if(isset($datos_acceso['usuario_usuario'])){
    if(password_verify($clave,$datos_acceso['usuario_password'])){
        $_SESSION['usuario']=$usuario;
        //header('Location: ../index.php?vista=mje_session');
        header('Location: ../index.php?vista=admin');
        exit;
    
    }else{
        header('Location: ../index.php?vista=mje_errorlogin');
        
        exit;

    }}else{
        header('Location: ../index.php?vista=mje_errorlogin');
        
        exit;
    }
}catch(Exception $e){
    $mensaje_error = "Error desconocido: " . $e->getMessage();

    //header('Location: ../index.php?vista=mje_error2');  
}

if (!empty($mensaje_error)) {
    header('Location: ../index.php?vista=mje_error&mensaje=' . urlencode($mensaje_error));
    exit;
}