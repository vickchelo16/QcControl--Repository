<? php
	session_start();
	$_SESSION['message'] = '';
	$
	$con = mysqli_connect("localhost","root_qccontrol","Prbendiciones2") or die("Error: No se puede conectar con base de datos");
	mysqli_select_db($con,"recibos_nominas");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>BUTTON PHP	</title>
<head>
	<body>
			<div id="frm">
				<form tye="text" id="user" name="user" />
					<p>
					<label>Username </label>
					<input type="text" id="user" name="user" />
				</p>
				</form>
			</div>
	</body>

</html>