<?php
session_start();
<<<<<<< HEAD
$_SESSION['usuario']=$_POST['usuario'];
=======
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
include("../inc/main.php");


$usuario=limpiar_cadena($_POST['usuario']);
$clave=limpiar_cadena($_POST['clave']);
<<<<<<< HEAD
$codigo_captcha=limpiar_cadena($_POST['captcha']);

try{
if($codigo_captcha!=$_SESSION['codigo_captcha']){

header('Location: ../index.php?vista=mje_error_captcha');
=======
$codigo_captcha=($_POST['captcha']);

$mensaje_error = "";
try{
if($codigo_captcha!=$_SESSION['codigo_captcha']){
    header('Location: ../index.php?vista=mje_errorlogin');
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
exit;
}

$acceder=mysqli_query(conexion(),"SELECT * FROM usuario WHERE usuario_usuario='$usuario' ");
$datos_acceso=mysqli_fetch_assoc($acceder);



<<<<<<< HEAD
    if(isset($datos_acceso['usuario_usuario'])){
    if(password_verify($clave,$datos_acceso['usuario_password'])){
        
=======


    if(isset($datos_acceso['usuario_usuario'])){
    if(password_verify($clave,$datos_acceso['usuario_password'])){
        $_SESSION['usuario']=$usuario;
        //header('Location: ../index.php?vista=mje_session');
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
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
<<<<<<< HEAD
    header('Location: ../index.php?vista=mje_error2');  
=======
    $mensaje_error = "Error desconocido: " . $e->getMessage();

    //header('Location: ../index.php?vista=mje_error2');  
}

if (!empty($mensaje_error)) {
    header('Location: ../index.php?vista=mje_error&mensaje=' . urlencode($mensaje_error));
    exit;
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
}