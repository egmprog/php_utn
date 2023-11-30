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

//$ubic_img='../img/'.$nombre_img;

if(($type_img!='image/jpeg')&&($type_img!='image/jpg')&&($type_img!='image/png')||($size_img)>20000000000){
    header('Location: ../index.php?vista=mje_error4img');
    exit;
}else{
    /*
    move_uploaded_file($tmp_img, $ubic_img);
    // Crear una imagen desde el archivo temporal
    $imagen_origen = imagecreatefromstring(file_get_contents($ubic_img));

    // Crear una nueva imagen con las dimensiones deseadas
    $imagen_destino = imagecreatetruecolor(260, 200);

    // Copiar y redimensionar la imagen original a la nueva imagen
    imagecopyresampled($imagen_destino, $imagen_origen, 0, 0, 0, 0, 260, 200, imagesx($imagen_origen), imagesy($imagen_origen));

    // Obtener el contenido de la nueva imagen en formato JPEG (puedes ajustar según el formato que prefieras)
    ob_start();
    imagejpeg($imagen_destino);
    $imagen_contenido = ob_get_clean();
*/
   
    //conexion BD mediante la función definida en main.php        
    mysqli_query(conexion(), "INSERT INTO menu VALUES (DEFAULT, '$menu_p_ppal','$menu_ingred','$menu_precio','$tmp_img','$menu_estado') ");
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
