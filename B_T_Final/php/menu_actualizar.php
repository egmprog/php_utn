<?php
include("../inc/main.php");

$menu_p_ppal = limpiar_cadena($_POST['menu_p_ppal']);
$menu_ingred = limpiar_cadena($_POST['menu_ingred']);
$menu_precio = limpiar_cadena($_POST['menu_precio']);
$menu_estado = limpiar_cadena($_POST['menu_estado']);
$menu_id_ed = limpiar_cadena($_POST['menu_id']);

$ubic_img_lectura = '';
if (($_FILES['image']['size'])>0) {

    $nombre_img = $_FILES['image']['name'];
    $size_img = $_FILES['image']['size'];
    $type_img = $_FILES['image']['type'];
    $tmp_img = $_FILES['image']['tmp_name'];

    $ubic_img = '../img/' . $nombre_img;
    $ubic_img_lectura = './img/' . $nombre_img;


    if (($type_img != 'image/jpeg') && ($type_img != 'image/jpg') && ($type_img != 'image/png') || ($size_img) > 2000000) {
        header('Location: ../index.php?vista=mje_error4img');
        exit;
    } else {

        $original = imagecreatefrompng($tmp_img);

        //obtener las dimensiones (ancho y alto) original
        $ancho_original = imagesx($original);
        $alto_original = imagesy($original);

        //crar un lienzo vacío
        $ancho_nuevo = 200;
        $alto_nuevo = 150;
        //$alto_nuevo=round($ancho_nuevo*$alto_original/$ancho_original);

        //crear nueva imagen
        $copia = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);

        //copiar y redimensionar la imagen original en la nueva imagen
        imagecopyresampled($copia, $original, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $ancho_original, $alto_original);

        //exportar y guardar la imagen
        $guardar = imagejpeg($copia, "../img/$nombre_img", 100);

        //liberar memoria
        imagedestroy($original);
        imagedestroy($copia);
    }
exit;
}
    //conexion BD mediante la función definida en main.php        
    mysqli_query(conexion(), "UPDATE menu SET (menu_p_ppal='$menu_p_ppal',menu_ingred='$menu_ingred',menu_precio='$menu_precio',menu_img='$ubic_img_lectura',menu_estado='$menu_estado') WHERE menu_id='$menu_id_ed' ");
    mysqli_close(conexion());
    header('Location: ../index.php?vista=carga_correcta');
    exit;
    
    // Actualizar datos
    $actualizar_datos=conexion();
    $actualizar_datos=$actualizar_datos->prepare("UPDATE menu SET menu_p_ppal=:p_ppal,mnu_ingred=:ingred,menu_precio=:precio,menu_img=:img,menu_estado=:estado WHERE menu_id=id");

    $marcadores=[
        ":p_ppal"=>$menu_p_ppal,
        ":ingred"=>$menu_ingred,
        ":precio"=>$menu_precio,
        ":img"=>$guardar,
        ":estado"=>$menu_estado,
        ":id"=>$menu_id_ed,
    ];
