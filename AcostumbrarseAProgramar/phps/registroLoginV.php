<?php
	if(isset($_POST['submit'])){
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$correo = $_POST['correo'];
		$usuario = $_POST['usuario'];
		$contraseña = $_POST['contraseña'];
		$tlf = $_POST['telefono'];
		$tituloMuestra = $_POST['tituloMuestra'];

		if(!empty($nombre) AND !empty($correo) AND !empty($contraseña)
			AND !empty($tituloMuestra)){
			
			setcookie('registro', 'registro', time() + (86400 * 3), "/");
			setcookie('usuario', $usuario, time() + (86400 * 1), "/");

			header("Location: ../../index.php");

		}
	}

	function pintarPintado($pincel){
		if(isset($pincel)){
			echo ($pincel);
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="../img/favicon.png">
		<title>Registro de cuenta</title>
		<link rel="stylesheet" href="../css/registroLoginV.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	</head>
	<body>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8 text-center" style="padding-top:10%;">
				<h1>Registro de Datos</h1>
				<form action="<?=htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">		
					<fieldset class="col-sm-5 d-inline-block">
					<legend style="color:#fff;">Personales</legend>
						<input maxlength="45" class="casilla" placeholder="Nombre" type="text" name="nombre" autofocus value="<?=pintarPintado($nombre) ?>" required>
						<input maxlength="45" class="casilla" placeholder="Primer Apellido" type="text" name="apellido1" value="<?=pintarPintado($apellido1) ?>">
						<input maxlength="45" class="casilla" placeholder="Segundo Apellido" type="text" name="apellido2" value="<?=pintarPintado($apellido2) ?>">
						<input maxlength="45" class="casilla" placeholder="Correo" type="text" name="correo" value="<?=pintarPintado($correo) ?>" required>
					</fieldset>		
					<fieldset class="col-sm-5 d-inline-block">
					<legend style="color:#fff;">Usuario</legend>
						<input type="hidden" name="registro" value="registro">
						<input maxlength="45" class="casilla" placeholder="Nombre de Usuario" type="text" name="usuario" value="<?=pintarPintado($usuario) ?>" required>
						<input maxlength="45" class="casilla" placeholder="Contraseña" type="password" name="contraseña" required>
						<input class="casilla" placeholder="Telefono" type="tel" name="telefono" value="<?=pintarPintado($tlf) ?>">
						<input maxlength="45" class="casilla" placeholder="Titulo" type="text" name="tituloMuestra" value="<?=pintarPintado($tituloMuestra) ?>" required>
					</fieldset>
					
					<input type="submit" style="margin-top:10px;width:25%;" class="btn btn-outline-primary btn-large" name="submit">
					<?php include("validarRegistroLogin.php");?>
				</form>
			</div>
		</div>
	</body>
</html>