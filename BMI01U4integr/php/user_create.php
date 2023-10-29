<link rel="stylesheet" href="../inc/estilos.css">
<?php
include "../inc/textos.php";
include("../inc/main.php");


$apellidos=limpiar_cadena($_POST['apellidos']);
$nombres=limpiar_cadena($_POST['nombres']);
$email=limpiar_cadena($_POST['email']);
$usuario=limpiar_cadena($_POST['usuario']);
$pass1=limpiar_cadena($_POST['password1']);
$pass2=limpiar_cadena($_POST['password2']);

//Verificación campos obligatorios
if($apellidos=="" || $nombres=="" || $usuario=="" || $pass1=="" || $pass2==""){
    header("Location: ../index.php?vista=mje_error");
    
    exit();
};

 //Verificación integridad de los datos
 if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$apellidos)){
    header("Location: ../index.php?vista=mje_apellido");
    exit();
};

if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$nombres)){
    header("Location: ../index.php?vista=mje_nombre");
    exit();
};

if(verificar_datos("[a-zA-Z0-9]{4,20}",$usuario)){
    header("Location: ../index.php?vista=mje_usuario");
    exit();
};

if(verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$pass1) || verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$pass2)){
    header("Location: ../index.php?vista=mje_claves");
    
    exit();
};

//Verificación email
if($email!=""){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){                
        $check_email=mysqli_query(conexion(), "SELECT usuario_email FROM usuario WHERE usuario_email='$email'");
        $count_check_email=mysqli_num_rows($check_email);
        if($count_check_email>0){
            header("Location: ../index.php?vista=mje_emailexistente");
            
            exit();
        }
        $check_email=null;

    }else{
        header("Location: ../index.php?vista=mje_email");
        
        exit();
    } 
};


//Verificación usuario
conexion();
$check_usuario=mysqli_query(conexion(), "SELECT usuario_usuario FROM usuario WHERE usuario_usuario='$usuario'");
$count_check_usuario=mysqli_num_rows($check_usuario);
if($count_check_usuario>0){
    header("Location: ../index.php?vista=mje_uauarioexistente");
    
    exit();
};
$check_usuario=null;


//Verificación claves
if($pass1!=$pass2){
    header("Location: ../index.php?vista=mje_clavesnocoinciden");
    
    exit();
}else{
    $password=password_hash($pass1,PASSWORD_BCRYPT,["cost"=>10]);
};

//Conección a la BD e inserción de valores
conexion();
$conexion=mysqli_query(conexion(), "INSERT INTO usuario SET usuario_apellidos='$apellidos',usuario_nombres='$nombres',usuario_email='$email',usuario_usuario='$usuario',usuario_password='$password'");
if($conexion){
    header("Location: ../index.php?vista=mje_usuarioregistrado");
    
exit();    
}else{
    header("Location: ../index.php?vista=mje_error2");
    
    exit();    
}


