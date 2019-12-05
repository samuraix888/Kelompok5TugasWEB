<?php 
include 'koneksi_jadwal.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM tb_jadwal WHERE kode_jadwal='$id'")or die(mysqli_error($host));
 
header("location:index_jadwal_admin.php?pesan=hapus");
?>