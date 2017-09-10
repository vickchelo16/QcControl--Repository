<table class="table">
	<thead><tr><th>header</th><th>header</th><th>header</th><th>header</th></tr></thead>
	<tfoot><tr><td colspan="4"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
	<tbody><tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
	</tbody>

<tbody>
	<?php
		$con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
		$result = mysqli_query($con,"SELECT us.* 
					FROM relUsuariosRecibos rUR 
					INNER JOIN Usuarios us ON rUR.idUsuario = us.idUsuarioKey");
		while($row = mysqli_fetch_assoc($result)):
	?>	

	<tr>
		<td><?php echo $row['PrimerNombre'];?> </td>
		<td><?php echo $row['SegundoNombre'];?></td>
		<td><?php echo $row['ApellidoPaterno'];?></td>
		<td><?php echo $row['ApellidoMaterno'];?></td>
		<td><?php echo $row['NSS'];?></td>
		<td><?php echo $row['RFC'];?></td>
	</tr>

	<?php endwhile; ?>
<tbody>
</table>

<link rel="stylesheet" href="css/bootstrap.css" />
<script src="tables/jquery.js"> </script>
<script src="tables/jquery.dataTables.js"> </script>
<script src="tables/dataTables.bootstrap.js"> </script>


<script>
	$(".table").DataTable();
</script>