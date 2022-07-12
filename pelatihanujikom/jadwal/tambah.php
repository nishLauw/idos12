<?php
include '../koneksi.php'
?>
<html>
    <head></head>
    <body>
        <h1>Tambah Jadwal</h1>
 
        <form action="#" method="post">
        <table>
            <tr>
                <td>Dosen</td>
                <td>:</td>
                <td> <select name="kd_dosen">
                        <?php
                        $data2=$data->get_dosen();
                        while($record=$data2->fetch_array()){
                            echo '<option value="'.$record['kd_dosen'].'">'.$record['nama'].'</option>';
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>Matakuliah</td>
                <td>:</td>
                <td>
                    <select name="kd_matkul">
                        <?php
                        $data3=$data->get_matkul();
                        while($record=$data3->fetch_array()){
                            echo '<option value="'.$record['kd_matkul'].'">'.$record['nama'].'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ruang</td>
                <td>:</td>
                <td><input type="text" name="ruang"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="text" name="waktu"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
 
        </table>
        </form>
        <?php
 
        if(isset($_POST['ruang'])){
            $kd_dosen=$_POST['kd_dosen'];
            $kd_matkul=$_POST['kd_matkul'];
            $ruang=$_POST['ruang'];
            $waktu=$_POST['waktu'];
 
            if($data->add_jadwal($kd_dosen,$kd_matkul,$ruang,$waktu)){
                header('location:index.php');
            }
 
        }
 
        ?>
    </body>
</html>
