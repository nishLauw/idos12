<?php
include '../koneksi.php'

?>

<html>
<head></head>
<body>
	<h1> Data Mahasiswa</h1>
	<a href="tambah.php"><button>Tambah</button></a>
	<hr>
	<a href="../index.php">Back</a>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		$i=1;
		$data_Mahasiswa=$data->get_Mahasiswa();
		while($record=$data_Mahasiswa->fetch_array()){?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $record['nim'] ?></td>
				<td><?php echo $record['nama'] ?></td>
				<td><?php echo $record['jurusan'] ?></td>				
				<td><?php echo $record['alamat'] ?></td>
				<td>
					<a href="edit.php?nim=<?php echo $record['nim']?>">Edit</a>
					<a href="hapus.php?nim=<?php echo $record['nim'] ?>">Hapus</a>
				</td>
					</tr>
					</tr>
					</tr>
		<?php }
		?>
	</table>
</body>
</html>