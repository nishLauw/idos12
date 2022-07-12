<?php
include '../koneksi.php';

$nim=$_GET ['nim'];

if($data->delete_mahasiswa($nim)){
	header('location:index.php');
}
?>