<?php


	include ("conBD.php");
	//Realizar una consulta MySQL
	$idusuariologeado = $_COOKIE['idusuarios'];

	$query = "SELECT numTelefono, numMovil, correo, usuarioLinkdin, usuarioGitHub  FROM USUARIOS WHERE idusuarios=".$idusuariologeado;

	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error(). $query);

	
	//Imprimir los resultados en HTML
	//echo "<table>\n";
	while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
	    //echo "\t<tr>\n";
	    //foreach ($line as $col_value) {
?>
	<div><i class='fas fa-arrow-alt-circle-right'></i><span> Numero de telefono: <?=$line['numTelefono']?></span></div>
	<div><i class='fas fa-arrow-alt-circle-right'></i><span> Numero de Movil: <?=$line['numMovil']?></span></div>
	<div><i class='fas fa-arrow-alt-circle-right'></i><span> Email: <?=$line['correo']?></span></div>
	<div><i class='fas fa-arrow-alt-circle-right'></i><span> Linkdin: <?=$line['usuarioLinkdin']?></span></div>
	<div><i class='fas fa-arrow-alt-circle-right'></i><span> GitHub: <?=$line['usuarioGitHub']?></span></div>

<?php
	    //}
	    //echo "\t</tr>\n";
	}
	//echo "</table>\n";

	// Liberar resultados
	//mysqli_free_result($result);
	$result->mysqli_free_result;

	//Cerrar la conexión
	//mysqli_close($conn);
	$conn->mysqli_close;

?>