
<?php
	include ("conBD.php");

	//Realizar una consulta MySQL
	$query = "SELECT usuario FROM USUARIOS";
	$result = $conn->query($query) or die('Consulta fallida: ' . mysqli_error());

	//Imprimir los resultados en HTML
	//echo "<table>\n";
	while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
	    //echo "\t<tr>\n";
	    foreach ($line as $col_value) {
	        echo "<nav class='be'>".$line['usuario']."</nav>";
	    }
	    //echo "\t</tr>\n";
	}
	//echo "</table>\n";

	// Liberar resultados
	//mysqli_free_result($result);
	$result->mysqli_free_result;

	//Cerrar la conexión
	//mysqli_close($conn);
	$conn->mysqli_close;



/*
$sqlId="SELECT idusers_inventario as id FROM intranet.users_inventario where users_inventario.usuario='".$user."'";

$resultId = $conn->query($sqlId);

while($idsito = $resultId->fetch_array(MYSQLI_ASSOC)) {
	 $ids[]=$idsito;
}

$id=$ids[0]['id'];



$sqlResponsables="SELECT * FROM intranet.responsable_trabajador where idresponsable='".$id."'";

$resultResponsables = $conn->query($sqlResponsables);

while($resp = $resultResponsables->fetch_array(MYSQLI_ASSOC)) {
	 $respArray[]=$resp;
}
*/

/*
// Conectando, seleccionando la base de datos
$con = mysqli_connect('localhost', 'root', 'scriptSh3LL') or die('No se pudo conectar: ' . mysqli_error());
echo 'Connected successfully';
mysqli_select_db('Curriculums') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM USUARIOS';
$result = mysqli_query($query) or die('Consulta fallida: ' . mysqli_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysqli_free_result($result);

//Cerrar la conexión
mysqli_close($con);
*/

	/*$sqlSoftwares= "SELECT idcartavacaciones as id, tipos_permiso.descripcion as resourceId,fechadesde as start, fechafin as end, trabajador as title FROM intranet.carta_vacaciones inner join tipos_permiso on carta_vacaciones.idtipopermiso=tipos_permiso.permisoid inner join empresa_vacaciones on carta_vacaciones.idempresa=empresa_vacaciones.idempresa_vacaciones inner join centros on carta_vacaciones.idcentro=centros.centroid where trabajador like '%%' && empresa_vacaciones.razon like '%YUDAYA%' && centros.centro like '%%' order by carta_vacaciones.idcartavacaciones desc";*/
	?>