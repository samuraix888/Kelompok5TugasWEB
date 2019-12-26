<?php 
include 'koneksi_kelas.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM tb_kelas WHERE kode_kelas='$id'")or die(mysqli_error($host));
 
header("location:index_kelas_admin.php?pesan=hapus");
?>