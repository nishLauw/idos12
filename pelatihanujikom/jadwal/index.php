<?php
include '../koneksi.php'
 
?>
 
<html>
    <head></head>
    <body>
        <h1> Data Jadwal</h1>
        <a href="tambah.php"><button>Tambah</button></a>
        <hr>
        <a href="../index.php">Back</a>
<table border="1">
    <tr>
        <th>NO</th>
        <th>Nama Dosen</th>
        <th>Nama Matkul</th>
        <th>Ruang</th>
        <th>waktu</th>
        <th>Aksi</th>
    </tr>
    <?php
    $i=1;
    $data_jadwal=$data->get_jadwal();
    while($record=$data_jadwal->fetch_array()){?>
      <tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $record['nama_dosen'] ?></td>
          <td><?php echo $record['nama_matkul'] ?></td>
          <td><?php echo $record['ruang'] ?></td>
          <td><?php echo $record['waktu'] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $record['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?php echo $record['id'] ?>">Hapus</a></td>
      </tr>  
      </tr>  
      </tr>  
    <?php }
    ?>
   
</table>
 
 
 
 
    </body>
</html>
 
