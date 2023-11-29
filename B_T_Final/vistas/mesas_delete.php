<link rel="stylesheet" href="./css/estilos.css">
<?php
include "./inc/main.php";

try{

//recepción dei id_mesa para consultar la BD
$id_mesa=limpiar_cadena($_GET['id_mesas']);

//consulta a la BD
conexion();
$conexion=mysqli_query(conexion(), "SELECT * FROM mesas WHERE id_mesas='$id_mesa' ");
$datos_mesa=mysqli_fetch_assoc($conexion);
?>

<form action="" method="post" class="cont1">
    <input type="hidden" name="aceptar" value="borrar_registro">
    <br><br><br>
    <label for="">¿Está seguro de eliminar <?php echo $datos_mesa['cant_mesas']." mesas, con ".$datos_mesa['cant_sillas']." sillas cada una" ?> ?</label>
    <button type="submit" >Si, eliminar</button>
</form>

<?php
if(!isset($_POST['aceptar'])){

}else{
    
    if($_POST['aceptar']=="borrar_registro"){
        
    //consulta a la BD y eliminación del registro
    conexion();
    $conexion1=mysqli_query(conexion(), "DELETE FROM mesas WHERE id_mesas='$id_mesa' ");
    
    header('Location: index.php?vista=mesas_elim');
    }    
}

}catch(Exception $e){
    echo "Se produjo un error: " . $e->getMessage();
}
?>
