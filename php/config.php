<? php
	$con = mysqli_connect("localhost","root_qccontrol","Prbendiciones2") or die("Error: No se puede conectar con base de datos");
	mysqli_select_db($con,"recibos_nomina");
?>