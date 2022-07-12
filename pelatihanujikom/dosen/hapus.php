<?php
include '../koneksi.php';

$kd_dosen=$_GET ['kd_dosen'];

if($data->delete_dosen($kd_dosen)){
	header('location:index.php');
}
?>