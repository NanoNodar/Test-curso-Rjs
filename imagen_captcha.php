<?php
session_start();
header ("Content-type: image/jpeg");

$im = @imagecreate(125, 35);
$color_fondo = imagecolorallocate ($im, 240, 240, 240);
$color_texto = imagecolorallocate ($im, 0, 138, 8);
imagestring ($im, 40, 37, 8, $_SESSION["codigo_captcha"], $color_texto);
imagejpeg ($im);

?>
