<?php

	include ("conBD.php");
	//Realizar una consulta MySQL
	$idusuariologeado = $_COOKIE['idusuarios'];

	$query = "SELECT objetivo  FROM USUARIOS WHERE idusuarios=".$idusuariologeado;

	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error(). $query);

	
	//Imprimir los resultados en HTML
	//echo "<table>\n";

	if(mysqli_num_rows($result) > 0){
		while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
	    	//echo "\t<tr>\n";
	    	//foreach ($line as $col_value) {
?>
			<div><span> <?=$line['objetivo']?></span></div>

<?php
	    //}
	    //echo "\t</tr>\n";
		}
	}else{
?>
		<div><span>Aun no se ha añadido ningún objetivo</span></div>
<?php

	}
	//echo "</table>\n";

	// Liberar resultados
	//mysqli_free_result($result);
	$result->mysqli_free_result;

	//Cerrar la conexión
	//mysqli_close($conn);
	$conn->mysqli_close;

?>