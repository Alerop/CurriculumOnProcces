<?php

	function starsBase($pintadas){
		$cont=5;
		$nopintadas=5-$pintadas;
		for($i=1;$i<=$pintadas;$i++){
?>
		<input style="display:none;" id="pintada<?=$i ?>" type="radio" name="pintadas" value="<?=$cont-- ?>">
		<label for="pintada<?=$i ?>"><i class="fas fa-star" style="color:#B75A70;"></i></label>
<?php
		}
		for($i=1;$i<=$nopintadas;$i++){
?>
			<input style="display:none;" id="radio<?=$i ?>" type="radio" name="estrellas" value="<?=$cont-- ?>">
			<label for="radio<?=$i ?>"><i class="fas fa-star"></i></label>
			
<?php
			
		}
		
	}
?>

<?php

	
	function skillsBase($clave,$valor){		
		
?>
			<input style="display:none;" id="hab<?=$clave?>" type="text" name="<?=$clave?>" value="<?=$clave?>">
			<label style="margin-bottom:1px;" class="col-sm-6" for="<?=$clave?>"><?=$clave?></label>
			<input  style="display:none;" class="hab<?=$valor?>" type="text" name="hab<?=$valor?>" value="hab<?=$valor?>">
			<label style="margin-bottom:1px;" id="skills<?=$clave?>" class="col-sm-6 clasificacion" for="hab<?=$valor?>"><?=starsBase($valor);?></label>
<?php

	}
?>
<?php

	include ("conBD.php");
	//Realizar una consulta MySQL
	$idusuariologeado = $_COOKIE['idusuarios'];

	/*SELECT nombreHabilidad, puntuacion, TIPOS_HABILIDADES.tipo, FROM HABILIDADES INNER JOIN USUARIOS ON HABILIDADES.idusuarios=USUARIOS.idusuarios INNER JOIN TIPOS_HABILIDADES ON HABILIDADES.idthabilidades=TIPOS_HABILIDADES.idthabilidades WHERE USUARIOS.idusuarios=1; */

	$query = "SELECT nombreHabilidad, puntuacion, TIPOS_HABILIDADES.tipo, USUARIOS.idusuarios
	FROM HABILIDADES INNER JOIN USUARIOS
	ON HABILIDADES.idusuarios=USUARIOS.idusuarios 
	INNER JOIN TIPOS_HABILIDADES
	ON HABILIDADES.idthabilidades=TIPOS_HABILIDADES.idthabilidades
	WHERE USUARIOS.idusuarios=".$idusuariologeado.";";

	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error(). $query);


	/*$array = [
    "foo" => "bar",
    "bar" => "foo",
	];*/


	//arrays de nombres de habilidad
	$profesional = [];
	$personal = [];
	$idioma = [];
	$otros = [];

	while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
		if($line['idusuarios'] == $idusuariologeado){
			if($line['tipo']=="Profesional"){
				$profesional = array_push_assoc($profesional, $line['nombreHabilidad'], $line['puntuacion']);
			}else if($line['tipo']=="Personal"){
				$personal = array_push_assoc($personal, $line['nombreHabilidad'], $line['puntuacion']);
			}else if($line['tipo']=="Idioma"){
				$idioma = array_push_assoc($idioma, $line['nombreHabilidad'], $line['puntuacion']);
			}else if($line['tipo']=="Otros"){
				$otros = array_push_assoc($otros, $line['nombreHabilidad'], $line['puntuacion']);
			}
		}
	}
	$result->mysqli_free_result;
	$conn->mysqli_close;


	/*
		<input style="display:none;" id="hab<?=$clave?>" type="text" name="<?=$clave?>" value="<?=$clave?>">
			<label class="col-sm-4" for="<?=$clave?>"><?=$clave?></label>
			<input style="display:none;" id="hab<?=$valor?>" type="text" name="<?=$valor?>" value="<?=$valor?>">
			<label class="col-sm-6 col-sm-offset-6" for="<?=$valor?>"><?=starsBase();?></label>
	*/

?>		
		<div class="row">
			<form class="col-sm-12 nopadding" action="" method="POST">
				<div class="row sipadding">
					<h6 class="letrita col-sm-9">Profesional </h6>
					<input style="display:none;" id="nombreTipoProf" type="text" name="nombreTipoProf" value="Profesional">
					<div class="letrita col-sm-3">
						<!--<i class="fas fa-plus-circle">--></i><input style="display:none;" id="añadirProf" type="text" name="AñadirTipoProf" value="addProf">
						<!--<i class="fas fa-minus-circle"></i>--><input style="display:none;" id="quitarProf" type="text" name="quitarTipoProf" value="lessProf">
					</div>
					
<?php 

						reset($profesional);
						while (list($clave, $valor) = each($profesional)) { 

							skillsBase($clave,$valor);
						}

?>
					<h6 class="letrita col-sm-9">Personal </h6>
					<input style="display:none;" id="nombreTipoPerso" type="text" name="nombreTipoPerso" value="Personal">
					<div class="letrita col-sm-3">
						<!--<i class="fas fa-plus-circle">--></i><input style="display:none;" id="añadirPerso" type="text" name="AñadirTipoPerso" value="addPerso">
						<!--<i class="fas fa-minus-circle"></i>--><input style="display:none;" id="quitarPerso" type="text" name="quitarTipoPerso" value="lessPerso">
					</div>
					
<?php 
						reset($personal);
						while (list($clave, $valor) = each($personal)) { 

							skillsBase($clave,$valor);
						}

?>
					<h6 class="letrita col-sm-9">Idiomas </h6>
					<input style="display:none;" id="nombreTipoIdio" type="text" name="nombreTipoIdio" value="Idiomas">
					<div class="letrita col-sm-3">
						<!--<i class="fas fa-plus-circle"></i>--><input style="display:none;" id="añadirIdio" type="text" name="AñadirTipoIdio" value="addIdio">
						<!--<i class="fas fa-minus-circle"></i>--><input style="display:none;" id="quitarIdio" type="text" name="quitarTipoIdio" value="lessIdio">
					</div>
					
<?php 
						reset($idioma);
						while (list($clave, $valor) = each($idioma)) { 

							skillsBase($clave,$valor);		    			
						}

?>	
				</div>
			</form>
		</div>
