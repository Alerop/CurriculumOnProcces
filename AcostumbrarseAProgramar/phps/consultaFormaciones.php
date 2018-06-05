<?php


	include ("conBD.php");
	/*
		SELECT fecha_promocion, descripcion, 
			INSTITUTOS.Nombre AS 'instNombre', ESTUDIOS.Nombre AS 'estNombre',
		 	USUARIOS.idusuarios AS 'usuIdusuarios', USUARIOS.usuario AS 'usuUsuario'
		FROM FORMACIONES
		INNER JOIN USUARIOS_FORMACIONES
		ON FORMACIONES.idformaciones=USUARIOS_FORMACIONES.idformaciones
		INNER JOIN USUARIOS 
		ON USUARIOS.idusuarios=USUARIOS_FORMACIONES.idusuarios
		INNER JOIN INSTITUTOS
		ON INSTITUTOS.idinstitutos=FORMACIONES.idinstitutos
		INNER JOIN ESTUDIOS
		ON ESTUDIOS.idestudios=FORMACIONES.idestudios
		WHERE USUARIOS.idusuarios=1;
	*/



	$query = "SELECT fecha_promocion, descripcion, 
			INSTITUTOS.Nombre AS 'instNombre', ESTUDIOS.Nombre AS 'estNombre'
		FROM FORMACIONES
		INNER JOIN USUARIOS_FORMACIONES
		ON FORMACIONES.idformaciones=USUARIOS_FORMACIONES.idformaciones
		INNER JOIN USUARIOS 
		ON USUARIOS.idusuarios=USUARIOS_FORMACIONES.idusuarios
		INNER JOIN INSTITUTOS
		ON INSTITUTOS.idinstitutos=FORMACIONES.idinstitutos
		INNER JOIN ESTUDIOS
		ON ESTUDIOS.idestudios=FORMACIONES.idestudios
		WHERE USUARIOS.idusuarios=".$_COOKIE['idusuarios'].";";

	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error(). $query);

	
	//Imprimir los resultados en HTML
	//echo "<table>\n";
?>

		<!--Primera row-->
		<div class="col-sm-3 text-right letrita"><i class='far fa-arrow-alt-circle-right'></i></div>
		<div class="col-sm-9 text-left letrita">Formaciones</div>

<?php
	if(mysqli_num_rows($result) > 0){
		while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
		    //echo "\t<tr>\n";
		    //foreach ($line as $col_value) {

?>
			<!-- Segunda row -->
			<div class="col-sm-3 text-right" style="padding-right: 0;">
				<span><?=$line['fecha_promocion']?></span>
			</div>
			<div class="col-sm-8 text-left"><span><?=$line['instNombre']." ".$line['estNombre']?></span></div>
			<!-- Tercera row -->
			<div class="col-sm-3 text-right"></div>
			<div class="col-sm-9 text-justify"><span><?=$line['descripcion']?></span></div>
			<div class="col-sm-12"><hr style="max-width: 30%"/></div>

<?php
		    //}
		    //echo "\t</tr>\n";
		}
	}else{
?>
				<!--Segunda row-->
				<div class="col-sm-3 text-right" style="padding-right: 0;">
					<span>Fecha promo</span>
				</div>
				<div class="col-sm-8 text-left"><span>Nombre estudios Nombre instituto </span></div>
				<!--Tercera row-->
				<div class="col-sm-3 text-right"></div>
				<div class="col-sm-9 text-justify"><span>Descripción actual sobre la formacion.</span></div>
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



<!--Segunda row
<div class="col-sm-3 text-right">FehcaInicio-FechaFin</div>
<div class="col-sm-2 text-left">Puesto</div>
<div class="col-sm-6 text-left">Empresa</div>

<div class="col-sm-5"></div>
<div class="col-sm-7 text-justify">Descripcion</div>
-->
