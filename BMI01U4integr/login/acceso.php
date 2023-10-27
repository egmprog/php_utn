<link rel="stylesheet" href="./css/estilos.css">
<?php
include("main.php");

$usuario=limpiar_cadena($_POST['usuario']);
$clave=limpiar_cadena($_POST['clave']);

try{

$acceder=mysqli_query(conexion(),"SELECT * FROM usuario WHERE usuario_usuario='$usuario' ");
$datos_acceso=mysqli_fetch_assoc($acceder);
//echo $datos_acceso['usuario_usuario'];
//echo $datos_acceso['usuario_password'];




    if(isset($datos_acceso['usuario_usuario'])){
    if(password_verify($clave,$datos_acceso['usuario_password'])){
        echo'
        <div>
            <h2>Acceso correcto</h2>
        </div>
        ';
        sleep(5);
        header('Location: principal.php');
        exit;
    
    }else{
        echo'
        <div>
            <h2>Acceso inválido</h2>
        </div>    
        ';
        exit;

    }}else{
        echo'
        <div>
            <h2>Acceso inválido</h2>
        </div>    
        ';
        exit;
    }
}catch(Exception $e){
    echo'
    <div>
        <h2>Acceso inválido</h2>
    </div>    
    ';   
}