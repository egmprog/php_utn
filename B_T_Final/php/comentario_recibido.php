<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
=======
    <title></title>
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
</head>
<body>
    
<?php
$estrellas=$_POST['estrellas'];
$comentario=$_POST['comentario'];

$archivo_coment=fopen("../docs/comentarios.txt","a");
$texto = "Valoración: ".'<span style="font-size: 24px; color: red;">'.$estrellas."</span>".' - '. $comentario.' - '.date('d-m-Y');

$escrito=fwrite($archivo_coment,"\n".$texto);

if($escrito){
    header('Location: ../index.php?vista=coment_ok');
}else{
    header('Location: ../index.php?vista=coment_off');
}

?>
</body>
</html>
