<?php
	if(isset($_POST['submit'])) {
		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			?>
			<p style="color:red;">* El correo es incorrecto</p>
			<?php
		}
	}