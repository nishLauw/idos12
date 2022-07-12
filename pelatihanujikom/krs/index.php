<?php
include '../koneksi.php'

?>

<html>
<head></head>
<body>
	<h1> KRS </h1>
	<a href="tambah.php"><button>Tambah</button></a>
	<hr>
	<a href="../index.php">Back</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>ID Jadwal</th>
			<th>NIM</th>
			<th>Semester</th>
			<th>Aksi</th>
		</tr>
		<?php
		$data_krs=$data->get_krs();
		while($record=$data_krs->fetch_array()){?>
			<tr>
				<td><?php echo $record['id'] ?></td>
				<td><?php echo $record['id_jadwal'] ?></td>
				<td><?php echo $record['nim'] ?></td>
				<td><?php echo $record['kd_semester'] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $record['id']?>">Edit</a>
					<a href="hapus.php?id=<?php echo $record['id'] ?>">Hapus</a>
				</td>
					</tr>
					</tr>
					</tr>
		<?php }
		?>
	</table>
</body>
</html>