<link rel="stylesheet" href="./css/estilos.css">
<?php
include("./inc/nav.php");
include ("main.php");

$apellidos=limpiar_cadena($_POST['apellidos']);
$nombres=limpiar_cadena($_POST['nombres']);
$email=limpiar_cadena($_POST['email']);
$usuario=limpiar_cadena($_POST['usuario']);
$pass1=limpiar_cadena($_POST['password1']);
$pass2=limpiar_cadena($_POST['password2']);
$persona=limpiar_cadena($_POST['persona']);

//consulta a la BD
conexion();
$conexion2=mysqli_query(conexion(), "SELECT * FROM usuario WHERE usuario_id='$persona' ");
$datos_usuario2=mysqli_fetch_assoc($conexion2);

/*
$apellidos=($_POST['apellidos']);
$nombres=($_POST['nombres']);
$email=($_POST['email']);
$usuario=($_POST['usuario']);
$pass1=($_POST['password1']);
$pass2=($_POST['password2']);


//Verificación campos obligatorios
if($apellidos=="" || $nombres=="" || $usuario=="" || $pass1=="" || $pass2==""){
    echo '
        <div class="">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No ha llenado todos los campos que son obligatorios
        </div>
    ';
    exit();
};
*/

 //Verificación integridad de los datos
 if(isset($apellidos)&&$datos_usuario2['usuario_apellidos']!=$apellidos){
    if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$apellidos)){
        echo '
            <div class="">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El APELLIDO no coincide con el formato solicitado
            </div>
        ';
        exit();
    };
};

if(isset($nombres)&&$datos_usuario2['usuario_nombres']!=$nombres){
    if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$nombres)){
        echo '
            <div class="">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    };
};

if(isset($usuario)&&$datos_usuario2['usuario_usuario']!=$usuario){
    if(verificar_datos("[a-zA-Z0-9]{4,20}",$usuario)){
        echo '
            <div class="">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El USUARIO no coincide con el formato solicitado<br>
                Entre 4 y 20 caracteres: números y letras minúsculas y mayúsculas.
            </div>
        ';
        exit();
    };
};

/*
if(isset($pass1)&&isset($pass2)){
    if(verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$pass1) || verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$pass2)){
        echo '
            <div class="">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Las CLAVES no coinciden con el formato solicitado<br>
                Entre 7 y 100 caracteres. Letras minúsculas y mayúsculas; números y signos @.-
            </div>
        ';
        exit();
    };
};
*/

//Verificando email
if(isset($email)&&$datos_usuario2['usuario_email']!=$email){
    if($email!=""){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){                
            $check_email=mysqli_query(conexion(), "SELECT usuario_email FROM usuario WHERE usuario_email='$email'");
            $count_check_email=mysqli_num_rows($check_email);
            if($count_check_email>0){
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        El correo electrónico ingresado ya se encuentra registrado.
                    </div>
                ';
                exit();
            }
            $check_email=null;

        }else{
            echo '
                <div class="">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                    Ha ingresado un correo electrónico no valido
                </div>
            ';
            exit();
        } 
    };
};

//Verificación usuario

if(isset($usuario)&&$datos_usuario2['usuario_usuario']!=$usuario){
    conexion();
    $check_usuario=mysqli_query(conexion(), "SELECT usuario_usuario FROM usuario WHERE usuario_usuario='$usuario'");
    $count_check_usuario=mysqli_num_rows($check_usuario);
    if($count_check_usuario>0){
        echo '
            <div class="">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El USUARIO ingresado ya se encuentra registrado, por favor elija otro
            </div>
        ';
        exit();
    };
    $check_usuario=null;
};


//Verificación claves
if(isset($pass1)&&isset($pass2)){
    if($pass1!=$pass2){
        echo '
            <div class="">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Las CLAVES que ha ingresado no coinciden
            </div>
        ';
        exit();
    }else{
        $password=password_hash($pass1,PASSWORD_BCRYPT,["cost"=>10]);
    };
};



//Conección a la BD e inserción de valores
conexion();
$conexion=mysqli_query(conexion(), "UPDATE usuario SET usuario_apellidos='$apellidos',usuario_nombres='$nombres',usuario_email='$email',usuario_usuario='$usuario',usuario_password='$password' WHERE usuario_id='$persona' ");
if($conexion){
    echo '
    <div class="">
        <strong>¡Usuario actualizado con éxito!</strong><br>        
    </div>
';
exit();    
}else{
    echo '
    <div class="">
        <strong>¡Ha ocurrido un error!</strong><br>
        No se ha guardadado la información propuesta.
    </div>
    ';
    exit();    
}

$conexion=null;

