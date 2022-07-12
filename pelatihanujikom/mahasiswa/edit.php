<?php
include '../koneksi.php';

$nim=$_GET['nim'];
$mahasiswaByID=$data->get_mahasiswaById($nim)->fetch_assoc();

?>
<html>
<body>
	<h1>Edit Mahasiswa</h1>
	
	<form action="#" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" value="<?php echo $mahasiswaByID['nim']?>" disabled></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $mahasiswaByID['nama']?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan" value="<?php echo $mahasiswaByID['jurusan']?>"></td>
		</tr>		
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $mahasiswaByID['alamat']?>"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
		
	</table>
	</form>
	<?php
	
	if(isset($_POST['nama_mahasiswa'])){
		$nama_mahasiswa=$_POST['nama_mahasiswa'];
		$jurusan=$_POST['jurusan'];
		$alamat=$_POST['alamat'];
		
		if($data->update_mahasiswa($nim,$nama_mahasiswa,$jurusan,$alamat)){
			header('location:index.php');
		}
	}
	?>
</body>
</html>

