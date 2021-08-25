<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_index.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <div class="container">
        <nav class="titulo"><h1>Evaluacion integradora</h1></nav>
		<main class="subcontainer login">
			<form action="validar.php" method="post">
				<h2>Iniciar sesion</h2>
				<div class="container_usuario"><input type="text" name="nombre_usuario" required placeholder="Ingrese su usuario" value="<?php if(isset($_COOKIE['usuario_cookie'])){ echo $_COOKIE['usuario_cookie'];}?>"></div>
				<div class="container_password"><input type="password" name="password" required placeholder="Ingrese su contraseña" value="<?php if(isset($_COOKIE['password_cookie'])){ echo $_COOKIE['password_cookie'];}?>"></div>
				<div class="container_checkbox"> <input type="checkbox" name="recordar" <?php if(isset($_COOKIE['usuario_cookie'])){?> checked <?php } ?> > <h4>Recordar contraseña</h4> </div>
				<div class="container_submit"><input type="submit" value="Entrar"></div>
			</form>
        </main>
        <aside class="subcontainer register">
                <h2>Registrarse</h2>
				<form method="post" action="cargar_registro.php">
					<div class="container_nombre"><input type="text" name="nombre_usuario" required placeholder="Nombre de usuario"></div>
					<div class="container_password"><input type="password" name="contraseña_usuario" required placeholder="Contraseña"></div>
					<div class="container_nombre_real"><input type="text" name="nombre_real" required placeholder="Nombre"></div>
					<div class="container_apellido_real"><input type="text" name="apellido_real" required placeholder="Apellido"></div>
					<div class="container_mail"><input type="mail" name="mail_usuario" required placeholder="Correo electronico"></div>
                    <div class="container_captcha"><input type="textarea" name="confirmacion_captcha" required placeholder="Captcha"></div>
                    <div class="imagen_captcha">
                    <?php
                    include("captcha.php");
                    echo $imagen;
                    ?>
                    </div>
					<div class="container_submit"><input type="submit" value="Cargar">
				</form>
        </aside>
    </div>
        <?php
		if (isset($_GET['fail'])){
			echo "<script>alert('Usuario o contraseña incorrectos')</script>";
		}
		if (isset($_GET['register'])){
			echo "<script>alert('¡Registro exitoso! Ahora inicia sesión')</script>";
		}
        if (isset($_GET['fail_captcha'])){
			echo "<script>alert('Captcha incorrecto')</script>";
		}
        if (isset($_GET['logout'])){
			echo "<script>alert('Sesion cerrada')</script>";
		}
		?>
</body>
</html>