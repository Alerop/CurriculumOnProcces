<?php


	//var_dump($_POST);
	//echo ('<br/><br/><br/>');

	$username = isset($_POST['usuario']) ? $_POST['usuario'] : null;
	$password = isset($_POST['password']) ? $_POST['password'] : null;

	//var_dump($username, $password);

	include ("conBD.php");


	$query = "SELECT idusuarios, usuario, password, nombre, apellido1, apellido2, tituloMuestra FROM USUARIOS WHERE usuario='".$username."' AND password='".$password."';";

	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error().$query);

	while ($row = $result->fetch_array(MYSQLI_ASSOC)){

		if ($username == $row['usuario'] AND $password == $row['password']){

		    setcookie('usuario', $row['usuario'],time() + (86400 * 3));//86400 =  1dia
		    setcookie('idusuarios', $row['idusuarios'],time() + (86400 * 3));
		    setcookie('nombreusuario', $row['nombre'],time() + (86400 * 3));
		    setcookie('apellido1usuario', $row['apellido1'],time() + (86400 * 3));
		    setcookie('apellido2usuario', $row['apellido2'],time() + (86400 * 3));
		    setcookie('tituloMuestrausuario', $row['tituloMuestra'],time() + (86400 * 3));
		    

		    header("Location: indexLogeado.php");
		    //die("Acceso aceptado");

		} else {
			header("Location: ../../index.php");
			echo ("Te has equivocado");
			//echo "<script language='javascript'> alert('Pinocho!'); </script>";
		   	
		 }
	}
		    mysqli_close($conexion); 

	/* $row = $result->fetch_array(MYSQLI_ASSOC);
	 if (password_verify($password, $row['password'])) { 
	 	
	    $_SESSION['loggedin'] = true;
	    $_SESSION['username'] = $username;
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
	    $_COOKIE['usuario'] = $row['usuario'];
	    $_COOKIE['idusuarios'] = $row['idusuarios'];

	    echo "Bienvenido! " . $_SESSION['username'];
	    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

	 } else { 
	   echo "Username o Password estan incorrectos.";

	   echo "<br><a href='indexPortal.php'>Volver a Intentarlo</a>";
	 }*/
	 
 ?>