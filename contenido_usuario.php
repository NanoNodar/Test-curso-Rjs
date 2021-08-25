<?php

    include('seguridad.php');
    include('conexion.php');
    
    $usuario_id = $_SESSION['nombre_usuario'];
    $result = mysqli_query($datos_bd, "SELECT * FROM usuarios WHERE usuario='$usuario_id'");
	$bd=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_usuario.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<title>Inicio de la sesion cliente</title>
</head>
<body>
	<div class="container">
	<div class="subcontainer">
        <section>
		    <h2>¡Hola <?php echo $_SESSION['nombre_usuario']; ?>!</h2>
			<img src="text-bienvenido.png">
        </section>
        <aside>
            <div>
                <h2><u>Datos de usuario</u></h2>
                <h3>Nombre de usuario: <?php echo $bd["usuario"]; ?></h3>
                <h3>Contraseña: <?php echo $bd["contraseñaUsuario"]; ?></h3>
		        <h3>Nombre: <?php echo $bd["nombreUsuario"]; ?></h3>
		        <h3>Apellido: <?php echo $bd["apellidoUsuario"]; ?></h3>
		        <h3>Correo electronico: <?php echo $bd["mailUsuario"]; ?></h3>
            </div>
        </aside>
		<h4><a href="salir.php">Cerrar sesion</a></h4>
	</div>
</div>
</body>
</html>