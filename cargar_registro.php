<?php
    session_start();
	$confirmacion = $_POST['confirmacion_captcha'];
    if($confirmacion == $_SESSION['codigo_captcha']){

	$usuario = $_POST['nombre_usuario'];
	$contraseña = $_POST['contraseña_usuario'];
	$nombre = $_POST['nombre_real'];
	$apellido = $_POST['apellido_real'];
	$mail = $_POST['mail_usuario'];

	include('conexion.php');

	mysqli_query($datos_bd, "INSERT INTO usuarios VALUES(NULL, '$usuario', '$contraseña', '$nombre', '$apellido', '$mail')");

	header('Location:index.php?register');
    }
    else{
        header('Location:index.php?fail_captcha');
    }
?>