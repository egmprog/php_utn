<?php
include("../inc/main.php");

$menu_p_ppal=limpiar_cadena($_POST['menu_p_ppal']);
$menu_ingred=limpiar_cadena($_POST['menu_ingred']);
$menu_precio=limpiar_cadena($_POST['menu_precio']);
$menu_estado=limpiar_cadena($_POST['menu_estado']);

$nombre_img=$_FILES['image']['name'];
$size_img=$_FILES['image']['size'];
$type_img=$_FILES['image']['type'];
$tmp_img=$_FILES['image']['tmp_name'];

$ubic_img='../img/'.$nombre_img;
$ubic_img_lectura='./img/'.$nombre_img;

if(($type_img!='image/jpeg')&&($type_img!='image/jpg')&&($type_img!='image/png')||($size_img)>2000000){
    header('Location: ../index.php?vista=mje_error4img');
    exit;
}else{

    $original=imagecreatefrompng($tmp_img);

    //obtener las dimensiones (ancho y alto) original
    $ancho_original=imagesx($original);
    $alto_original=imagesy($original);

    //crar un lienzo vacío
    $ancho_nuevo=200;
    $alto_nuevo=150;
    //$alto_nuevo=round($ancho_nuevo*$alto_original/$ancho_original);

    //crear nueva imagen
    $copia=imagecreatetruecolor($ancho_nuevo,$alto_nuevo);

    //copiar y redimensionar la imagen original en la nueva imagen
    imagecopyresampled($copia,$original,0,0,0,0,$ancho_nuevo,$alto_nuevo,$ancho_original,$alto_original);

    //exportar y guardar la imagen
    $guardar=imagejpeg($copia,"../img/$nombre_img",100);

    //liberar memoria
    imagedestroy($original);
    imagedestroy($copia);
   
    //conexion BD mediante la función definida en main.php        
    mysqli_query(conexion(), "INSERT INTO menu VALUES (DEFAULT, '$menu_p_ppal','$menu_ingred','$menu_precio','$ubic_img_lectura','$menu_estado') ");
    mysqli_close(conexion());
    header('Location: ../index.php?vista=carga_correcta');
    exit;
    
   /*  
    // Preparar la consulta SQL para insertar la imagen en la base de datos
    $consulta = "INSERT INTO menu (menu_p_ppal, menu_ingred, menu_precio, menu_img, menu_estado) VALUES (?, ?, ?, ?, ?)";
            
    // Usar una declaración preparada para evitar inyecciones SQL
    $stmt = mysqli_prepare(conexion(), $consulta);
    
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "sssis", $menu_p_ppal, $menu_ingred, $menu_precio, $imagen_contenido, $menu_estado);
    
    
    $stmt = mysqli_prepare(conexion(), "INSERT INTO menu ('menu_id', 'menu_p_ppal', 'menu_ingred', 'menu_precio', 'imagen_contenido','menu_estado') VALUES (DEFAULT,'$menu_p_ppal', '$menu_ingred', '$menu_precio', '$imagen_contenido', '$menu_estado')");
   
    conexion();
    $guardado=mysqli_query(conexion(),"INSERT INTO menu SET menu_p_ppal='$menu_p_ppal',menu_ingred='$menu_ingred',menu_precio='$menu_precio',menu_img='$imagen_contenido',menu_estado='$menu_estado' ");
     
*/
    


    }
