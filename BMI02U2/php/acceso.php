<?php
session_start();
include("../inc/main.php");


$usuario=limpiar_cadena($_POST['usuario']);
$clave=limpiar_cadena($_POST['clave']);
$codigo_captcha=limpiar_cadena($_POST['codigo_captcha']);

try{
if($codigo_captcha!=$_SESSION['$codigo_captcha']){
echo "Captcha incorrecto";
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