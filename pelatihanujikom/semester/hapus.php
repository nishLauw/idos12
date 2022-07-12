<?php
include '../koneksi.php';

$kd_semester=$_GET ['kd_semester'];

if($data->delete_semester($kd_semester)){
	header('location:index.php');
}
?>