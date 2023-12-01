<?php
include("../inc/main.php");

$menu_p_ppal = limpiar_cadena($_POST['menu_p_ppal']);
$menu_ingred = limpiar_cadena($_POST['menu_ingred']);
$menu_precio = limpiar_cadena($_POST['menu_precio']);
$menu_estado = limpiar_cadena($_POST['menu_estado']);

try {
    // Obtener información del archivo
    $nombre_img = $_FILES['image']['name'];
    $size_img = $_FILES['image']['size'];
    $type_img = $_FILES['image']['type'];
    $tmp_img = $_FILES['image']['tmp_name'];

    // Rutas para almacenar la imagen original y la redimensionada
    $ubic_img_original = '../img/' . $nombre_img;
    $ubic_img_lectura = './img/' . $nombre_img;

    // Verificar tipo de imagen y realizar el proceso correspondiente
    if (($type_img == 'image/jpeg' || $type_img == 'image/jpg') && $size_img <= 2000000) {
        $original = imagecreatefromjpeg($tmp_img);
    } elseif ($type_img == 'image/png' && $size_img <= 2000000) {
        $original = imagecreatefrompng($tmp_img);
    } else {
        throw new Exception("Tipo de imagen no válido o tamaño excedido.");
    }

    // Obtener las dimensiones (ancho y alto) de la imagen original
    $ancho_original = imagesx($original);
    $alto_original = imagesy($original);

    // Definir nuevas dimensiones
    $ancho_nuevo = 200;
    $alto_nuevo = 150;

    // Crear una nueva imagen en formato PNG
    $copia = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);

    // Copiar y redimensionar la imagen original en la nueva imagen
    imagecopyresampled($copia, $original, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $ancho_original, $alto_original);

    // Guardar la imagen redimensionada
    imagepng($copia, $ubic_img_original, 9);

    // Liberar memoria
    imagedestroy($original);
    imagedestroy($copia);
} catch (Exception $e) {
    // Manejar la excepción
    header('Location: ../index.php?vista=mje_error4img');
    exit;
}

// Insertar datos en la base de datos
mysqli_query(conexion(), "INSERT INTO menu VALUES (DEFAULT, '$menu_p_ppal','$menu_ingred','$menu_precio','$ubic_img_lectura','$menu_estado') ");
mysqli_close(conexion());
header('Location: ../index.php?vista=carga_correcta');
exit;
?>
