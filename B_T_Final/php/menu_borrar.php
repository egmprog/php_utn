<?php
include("../inc/main.php");

$menu_id_ed = limpiar_cadena($_POST['menu_id']);

// Verificar si el ID es válido
if (!is_numeric($menu_id_ed)) {
    header('Location: ../index.php?vista=error_id_invalido');
    exit;
}

// Conexion BD mediante la función definida en main.php
// y eliminación del registro
$eliminar=mysqli_query(conexion(), "DELETE FROM menu WHERE menu_id='$menu_id_ed'");

// Verificar si se realizó la eliminación correctamente
if ($eliminar > 0) {
    header('Location: ../index.php?vista=mje_elimOK');
} else {
    header('Location: ../index.php?vista=mje_error_eliminar');
}

// Cerrar la conexión
mysqli_close(conexion());
exit;
?>

        