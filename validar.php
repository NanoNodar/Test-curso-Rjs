<?php
		
		session_start();
		include('conexion.php');
		
			$result = mysqli_query($datos_bd, "SELECT * FROM usuarios WHERE usuario = '".$_POST['nombre_usuario']."' AND contraseñaUsuario = '".$_POST['password']."'") or die(mysqli_error());
			
			$array = mysqli_fetch_array($result);
			
			if (mysqli_num_rows($result) == true){
				($_SESSION["autentificado"] = 1);
				($_SESSION['nombre_usuario'] = $_POST['nombre_usuario']);
				($_SESSION['password'] = $_POST['password']);
				header("Location:contenido_usuario.php");
				if($array){
					if (!empty($_POST['recordar'])) {
						setcookie("usuario_cookie", $_POST["nombre_usuario"], time()+(60*60*24*365));
						setcookie("password_cookie", $_POST["password"], time()+(60*60*24*365));
					}else{
						if(isset($_COOKIE['usuario_cookie'])){
							setcookie("usuario_cookie", "");
						}
						if(isset($_COOKIE['usuario_cookie'])){
							setcookie("password_cookie", "");
						}
					}
				}
			}else{
				header("Location:index.php?fail");
			}
?>
