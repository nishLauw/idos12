<?php
include '../koneksi.php'

?>

<html>
<head></head>
<body>
	<h1> Semester</h1>
	<a href="tambah.php"><button>Tambah</button></a>
	<hr>
	<a href="../index.php">Back</a>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Kode Semester</th>
			<th>Semester</th>
			<th>Aksi</th>
		</tr>
		<?php
		$i=1;
		$data_semester=$data->get_semester();
		while($record=$data_semester->fetch_array()){?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $record['kd_semester'] ?></td>
				<td><?php echo $record['semester'] ?></td>
				<td>
					<a href="hapus.php?kd_semester=<?php echo $record['kd_semester'] ?>">Hapus</a>
				</td>
					</tr>
					</tr>
					</tr>
		<?php }
		?>
	</table>
</body>
</html>