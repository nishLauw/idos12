<?php
include '../koneksi.php';
 
$kd_matkul=$_GET['kd_matkul'];
 
if($data->delete_matkul($kd_matkul)){
    header('location:index.php');
}
 
 
?>
