<?php
session_start();
$_SESSION['usuario']=$_POST['usuario'];
include("../inc/main.php");


$usuario=limpiar_cadena($_POST['usuario']);
$clave=limpiar_cadena($_POST['clave']);
$codigo_captcha=limpiar_cadena($_POST['captcha']);

try{
if($codigo_captcha!=$_SESSION['codigo_captcha']){

header('Location: ../index.php?vista=mje_error_captcha');
exit;
}

$acceder=mysqli_query(conexion(),"SELECT * FROM usuario WHERE usuario_usuario='$usuario' ");
$datos_acceso=mysqli_fetch_assoc($acceder);



    if(isset($datos_acceso['usuario_usuario'])){
    if(password_verify($clave,$datos_acceso['usuario_password'])){
        
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
    header('Location: ../index.php?vista=mje_error2');  
}