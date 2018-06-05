<section class="row" style="min-height: 200px; padding-top:10%;padding-bottom:10%;">
	<div class="col-sm-12 col-centered ">
		<h1 class="letrita"><?=$_COOKIE['nombreusuario']." ".$_COOKIE['apellido1usuario']." ".$_COOKIE['apellido2usuario']?> 
			<i class='far fa-arrow-alt-circle-right'></i>
		</h1>
		<hr style="max-width: 60%"/>
		<form>
			<input style="display:none;" id="<?=$_COOKIE['tituloMuestrausuario']?>" nombre="<?=$_COOKIE['tituloMuestrausuario']?>" value="<?=$_COOKIE['tituloMuestrausuario']?>">
			<label style="font-size: 230%;font-weight:bold;"><?=$_COOKIE['tituloMuestrausuario']?></label>
		</form>
	</div>
</section>
<section class="row" id="awes" style="font-size: 30px;padding-bottom:10%;">
	<?php include ("consultaExperiencias.php");?>	
</section>
<section class="row" style="font-size: 30px;">
	<?php include ("consultaFormaciones.php");?>
</section>
<?php 
	/*foreach ($valores as $inside){	
		echo ("<section><div class='coca'><nav>".$inside."</nav></div></section>");
	}*/
?>
