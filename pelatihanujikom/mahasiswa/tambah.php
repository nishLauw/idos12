<?php
include '../koneksi.php'

?>
<html>
<head></head>
<body>
	<h1>Tambah Mahasiswa</h1>
	
	<form action="#" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</td>
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td><input type="text" name="nama_Mahasiswa"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
	</form>
	<?php
	
	if(isset($_POST['nim'])){
		$nim=$_POST['nim'];
		$nama_Mahasiswa=$_POST['nama_Mahasiswa'];
		$jurusan=$_POST['jurusan'];
		$alamat=$_POST['alamat'];
		
		if($data->add_Mahasiswa($nim,$nama_Mahasiswa,$jurusan,$alamat)){
			header('location:index.php');
		}
	}
	?>
</body>
</html>