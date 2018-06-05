<?php

	$servidor = "localhost";
	$bd = "Curriculums";
	$usuario = "root";
	$clave = "scriptSh3LL";

	//CONFIRM_ARRIVAL
	// Conectando, seleccionando la base de datos
	$conn = new mysqli($servidor, $usuario, $clave, $bd);
	mysqli_set_charset($conn,"utf8");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	

}
	
