<?php
session_start();
header("Content-type:image/jpeg");
$imagen_captcha=imagecreate(70,30);
$fonod=imagecolorallocate($imagen_captcha,239,192,240);
$texto=imagecolorallocate($imagen_captcha,82,4,24);
imagestring($imagen_captcha,5,15,5,$_SESSION['codigo_captcha'], $texto);
imagejpeg($imagen_captcha);