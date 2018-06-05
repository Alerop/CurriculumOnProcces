<?php
	function array_push_assoc($array, $key, $value){
 		$array[$key] = $value;
 		return $array;
	}

	function formatFecha($fecha){//2018-03-19
		//echo substr('abcdef', 1, 3);  // bcd
		$anio = substr($fecha,0,4); // 2018
		$mes = substr($fecha,5,2); // 03
		$dia = substr($fecha,9,2); // 19 

		return $mes."/".$anio;

	}
	/*$valores = [	
				'Pep' => "Guardiola",
				'Jose' => "Fino",
				'Awita' => "DeCoco",
			];
	$valores = array_push_assoc($valores, 'doce', 12);
	$valores = array_push_assoc($valores, 'nombreHabilidad', 'puntuacion');
	print_r($valores);*/

//array_push($profesional,array_push_assoc($profesional, $line['nombreHabilidad'], $line['puntuacion']));


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>DemoCurriculum1</title>
		<link rel="icon" href="../img/favicon.png">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/indexStyle.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="../js/testjs.js"></script>
		<script type="text/javascript">
			function loadQueryResults() {
			    $('#awes').load('../phps/consultaFormaciones.php');
			    return false;
			}
		</script>
		


	</head>
	<body>
		<div class="row">
			<!--<div id="marcoPerfil"><img id="foto_marcoPerfil" alt="foto de perfil" src="./AcostumbrarseAProgramar/img/muñeco3d.jpeg" /></div>-->
				<div id="contIzq" class="col-sm-3 rounded-left">
					<article>
						<?php include ("contIzquierda.php"); ?>
					</article>
				<footer style=" position: absolute; right: 0; bottom: 0; left: 0; padding: 1rem; text-align: center;"><i class="fas fa-info-circle"></i></footer>	
				</div>
				<div id="contDer" class="col-sm-9 rounded-right">
				<br/>
					<article class="contenedorDerecha">
						<?php	include ("contDerecha.php"); ?>
						<br/>
						<br/>
					</article>
					<article>
						<section>
							<?php include("cubo3d.php");?>
						</section>
					</article>
					<div class="objetivo"></div>
				</div>	
		</div>
	</body>
</html>