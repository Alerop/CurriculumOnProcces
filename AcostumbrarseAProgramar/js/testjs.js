function loadQueryResults1() {
	$("#token").on('click', function() {
	  //alert("inside onclick");
	  $('#awes').load('../phps/consultaFormaciones.php');
	  //window.location = "../phps/";
	});
}
