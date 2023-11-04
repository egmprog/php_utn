<?php
$estrellas=$_POST['estrellas'];
$comentario=$_POST['comentario'];

$archivo_coment=fopen("../docs/comentarios.txt","a");
$texto="Valoración: ".$estrellas."; ".$comentario;

$escrito=fwrite($archivo_coment,"\n".$texto);

if($escrito){
    header('Location: ../index.php?vista=coment_ok');
}else{
    header('Location: ../index.php?vista=coment_off');
}