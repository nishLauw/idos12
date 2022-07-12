<?php
include '../koneksi.php';

$id = $_GET['id'];
$jadwalByID = $data->get_jadwalById($id)->fetch_assoc();


?>
<html>

<body>
    <h1>Edit Jadwal</h1>

    <form action="#" method="post">
        <table>
            <tr>
                <td>Nama Dosen</td>
                <td>:</td>
                <td><input type="text" name="nama_dosen" value="<?php echo $dosenlByID['nama_dosen'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Matkul</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $matkulByID['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Ruang</td>
                <td>:</td>
                <td><input type="text" name="ruang" value="<?php echo $jadwalByID['ruang'] ?>"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="text" name="waktu" value="<?php echo $jadwalByID['waktu'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>

        </table>
    </form>
    <?php

    if (isset($_POST['nama_dosen'])) {
        $nama_dosen = $_POST['nama_dosen'];
        $nama_matkul = $_POST['nama_matkul'];
        $ruang = $_POST['ruang'];
        $waktu = $_POST['waktu'];

        if ($data->update_matkul($id, $nama_matkul, $ruang, $waktu)) {
            header('location:index.php');
        }
    }
    ?>
</body>

</html>