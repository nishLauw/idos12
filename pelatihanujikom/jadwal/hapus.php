<?php
include '../koneksi.php';
 
$id=$_GET['id'];
 
if($data->delete_jadwal($id)){
    header('location:index.php');
}
 
 
?>