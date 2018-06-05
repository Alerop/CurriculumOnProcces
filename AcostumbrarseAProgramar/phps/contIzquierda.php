
	<section>
		<h2 class="letrita">Contacto <i class='fas fa-arrow-alt-circle-right'></i></h2>
		<span>Bienvenido <?=$_COOKIE['usuario'] ?> !</span>
		<?php include ("consultaModoDContactos.php"); ?>
	</section>
	<section>
		<h2 class="letrita">Objetivo <i class='fas fa-arrow-alt-circle-right'></i></h2>
		<?php include ("consultaObjetivo.php"); ?>
	</section>
	<section>
		<h2 class="letrita">Skills <i class='fas fa-arrow-alt-circle-right'></i></h2>
		<?php include("consultaHabilidades.php"); ?>
	</section>
	<section>
		<h2 class="letrita">Opciones<i class='fas fa-arrow-alt-circle-right'></i></h2>
		<button type="submit" form="QueryForm" onclick="return loadQueryResults();">Submit Query</button>
		<a id="token" href="#" onlick="return loadQueryResults1();">Awi</a>
	</section>

	<!--echo ("<section><h2 class='letrita'>Contacto <i class='fas fa-arrow-alt-circle-right'></i></h2>");
	echo ("<span>Bienvenido " . $_GET['usu'] . "!</span>");
	include ("consultaModoDContactos.php");
	echo ("</section>");
	echo ("<section><h2 class='letrita'>Objetivo <i class='fas fa-arrow-alt-circle-right'></i></h2>");
	include ("consultaObjetivo.php");
	echo ("</section>");	
	echo ("<section><h2 class='letrita'>Skills <i class='fas fa-arrow-alt-circle-right'></i></h2>");
	include ("consultaHabilidades.php");
	echo ("</section>");-->
