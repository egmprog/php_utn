<link rel="stylesheet" href="./css/estilos.css">
<?php
include("./inc/nav.php");
include ("main.php");

//recepción dei id_persona para consultar la BD
$persona=$_GET['id_persona'];

//consulta a la BD
conexion();
$conexion3=mysqli_query(conexion(), "SELECT * FROM usuario WHERE usuario_id='$persona' ");
$datos_usuario3=mysqli_fetch_assoc($conexion3);
?>

<form action="#" method="post" class="cont1">
    <input type="hidden" name="aceptar" value="borrar_registro">
    <br><br><br>
    <label for="">¿Está seguro de eliminar al usuario <?php echo $datos_usuario3['usuario_apellidos'].", ".$datos_usuario3['usuario_nombres'] ?> ?</label>
    <button type="submit" >Si, eliminar</button>
</form>

<?php
if(!isset($_POST['aceptar'])){

}else{
    
    if($_POST['aceptar']=="borrar_registro"){
        
    //consulta a la BD y eliminación del registro
    conexion();
    $conexion1=mysqli_query(conexion(), "DELETE FROM usuario WHERE usuario_id='$persona' ");
    
    echo '
    <div class="cont1">
        <h2 class="p2">El usuario se eliminó con éxito</h2>
    </div>
    ';
    }

    
}
?>
