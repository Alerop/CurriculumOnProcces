<?php
	
	if(isset($_COOKIE['registro'])) {
    	echo ("<script>alert('Su registro se ha realizado correctamente.');</script>");

    	// Se cierra sesión (de manera controlada).
		unset($_COOKIE['registro']);
		setcookie('registro', null, -1, '/');
    }
	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>CurriclumProyect</title>
		<link rel="icon" href="./AcomstumbrarseAProgramar/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="./AcostumbrarseAProgramar/css/indexPortal.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

	</head>
	<body>
		<div class="login">
		    <h1>Login</h1>
		    <form action="./AcostumbrarseAProgramar/phps/consultaLogin.php" method="POST">
		    	<input type="text" name="usuario" placeholder="Username" required="required" autofocus value="<?=$_COOKIE['usuario']?>"/>
		        <input type="password" name="password" placeholder="Password" required="required" />

		        <button type="submit" class="btn btn-outline-primary btn-block btn-large">Let me in.</button>
		    </form>
		    <a href="./AcostumbrarseAProgramar/phps/registroLoginV.php" class="btn btn-outline-success btn-block btn-large">Registrarse</a>
		    <br>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>
</html>

<?php
	if(isset($_COOKIE['usuario'])) {
			unset($_COOKIE['usuario']);
			setcookie('usuario', null, -1, '/');
	    }
?>