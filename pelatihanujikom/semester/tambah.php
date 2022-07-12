<?php
include '../koneksi.php'

?>
<html>
<head></head>
<body>
	<h1>Tambah Semester</h1>
	
	<form action="#" method="post">
	<table>
		<tr>
			<td>Kode Semester</td>
			<td>:</td>
			<td><input type="number" name="kd_semester"></td>
		</td>
		<tr>
			<td>Semester</td>
			<td>:</td>
			<td><input type="text" name="semester"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
	</form>
	<?php
	
	if(isset($_POST['kd_semester'])){
		$kd_semester=$_POST['kd_semester'];
		$semester=$_POST['semester'];
		
		if($data->add_semester($kd_semester,$semester)){
			header('location:index.php');
		}
	}
	?>
</body>
</html>