<?php
session_start();
$numero1= rand(0,9);
$numero2= rand(0,9);
$numero3= rand(0,9);
$minus = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
$mayus = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$signos = array("!","#","$","%","&","=");

$generador_min = rand(0,26);
$generador_may = rand(0,26);
$generador_sig = rand(0,5);


$_SESSION["codigo_captcha"] = ($numero1).($minus[$generador_min]).($numero2).($mayus[$generador_may]).($signos[$generador_sig]).($numero3);
$imagen = "<img src=imagen_captcha.php>";
?>