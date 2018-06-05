<?php


	include ("conBD.php");

	/*
		SELECT fecha_ini,fecha_fin, puesto, descripcion, 
				EMPRESAS.Nombre AS 'empNombre', TRABAJOS.Nombre AS 'trbNombre',
				 USUARIOS.idusuarios AS 'usuIdusuarios', USUARIOS.nombre AS 'usuNombre',
				  USUARIOS.usuario AS 'usuUsuario'
		FROM EXPERIENCIAS
		INNER JOIN USUARIOS_EXPERIENCIAS
		ON EXPERIENCIAS.idexperiencias=USUARIOS_EXPERIENCIAS.idexperiencias
		INNER JOIN USUARIOS 
		ON USUARIOS.idusuarios=USUARIOS_EXPERIENCIAS.idusuarios
		INNER JOIN EMPRESAS
		ON EMPRESAS.idempresas=EXPERIENCIAS.idempresas
		INNER JOIN TRABAJOS
		ON TRABAJOS.idtrabajos=EXPERIENCIAS.idtrabajos
		WHERE USUARIOS.idusuarios=2;
	*/

	$query = "SELECT fecha_ini,fecha_fin, puesto, descripcion, 
				EMPRESAS.Nombre AS 'empNombre', TRABAJOS.Nombre AS 'trbNombre'
		FROM EXPERIENCIAS
		INNER JOIN USUARIOS_EXPERIENCIAS
		ON EXPERIENCIAS.idexperiencias=USUARIOS_EXPERIENCIAS.idexperiencias
		INNER JOIN USUARIOS 
		ON USUARIOS.idusuarios=USUARIOS_EXPERIENCIAS.idusuarios
		INNER JOIN EMPRESAS
		ON EMPRESAS.idempresas=EXPERIENCIAS.idempresas
		INNER JOIN TRABAJOS
		ON TRABAJOS.idtrabajos=EXPERIENCIAS.idtrabajos
		WHERE USUARIOS.idusuarios=".$_COOKIE['idusuarios'].";";

	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error(). $query);

	//Imprimir los resultados en HTML
	//echo "<table>\n";
?>

		<!--Primera row-->
		<div class="col-sm-3 text-right letrita"><i class="far fa-arrow-alt-circle-right"></i></div>
		<div class="col-sm-9 text-left letrita">Experiencias</div>

<?php
	
/*if(mysqli_num_rows($result) > 0){}*/

	if (mysqli_num_rows($result) > 0) {
		while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
	    //echo "\t<tr>\n";
	    //foreach ($line as $col_value) {
?>
			<!--Segunda row-->
			<div class="col-sm-3 text-right" style="padding-right: 0;">
				<span><?=formatFecha($line['fecha_ini'])?> - <?=formatFecha($line['fecha_fin'])?></span>
			</div>
			<div class="col-sm-8 text-left"><span><?=$line['puesto']." ".$line['empNombre']?></span></div>
			<!--Tercera row-->
			<div class="col-sm-3 text-right"></div>
			<div class="col-sm-9 text-justify"><span><?=$line['trbNombre'].". ".$line['descripcion']?></span></div>
			<div class="col-sm-12"><hr style="max-width: 30%"/></div>

<?php
	    //}
	    //echo "\t</tr>\n";
		}

	}else{
?>
			<!--Segunda row-->
			<div class="col-sm-3 text-right" style="padding-right: 0;">
				<span>Mes/Año - Mes/Año</span>
			</div>
			<div class="col-sm-8 text-left"><span>Nombre puesto Nombre de empresa</span></div>
			<!--Tercera row-->
			<div class="col-sm-3 text-right"></div>
			<div class="col-sm-9 text-justify"><span>Descripción actual sobre la experiencia.</span></div>
			<div class="col-sm-12"><hr style="max-width: 30%"/></div>

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

