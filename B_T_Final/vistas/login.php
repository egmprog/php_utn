<?php 
//session_start(); 
$_SESSION["num1"] = rand(0,10); 
$_SESSION["num2"] = rand(0,10);

include "./inc/head.php";
include "./inc/nav.php"; 
include "./inc/textos.php"; 

// codigo Captcha
$n1=rand(0,9);
$n2=rand(0,9);
$n3=rand(0,9);
$letra=array('a','h','L','d','M','K');
$simbolo=array('%','@','!','-','#');
$mezcla_letras=rand(0,5);
$mezcla_simbolos=rand(0,4);

$_SESSION['codigo_captcha']= $n1.$letra[$mezcla_letras].$n2.$simbolo[$mezcla_simbolos].$n3;

if(isset($_SESSION['usuario'])){
    header('Location:./index.php?vista=admin');
    exit;
}

?>

<div class="cont1">
    <h3 class="p3">Acceda con sus credenciales</h3>
</div>
<div class="cont1">
    <form action="./php/acceso.php" method="post">
    <input type="text" name="usuario" placeholder="Usuario" require><br>
    <input type="password" name="clave" placeholder="Contraseña" require><br>
    <img src="./php/captcha.php" alt="captcha"><br>
    <input type="text" name="captcha" placeholder="Ingresa el texto que se observa en la linea anterior"><br>
    

    <button type="submit">Acceder</button>
    </form>
</div>


<?php 
include "./inc/footer.php";

?>