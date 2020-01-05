<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM tb_kelas WHERE kode_kelas='$id'")or die(mysqli_error($host));
 
header("location:kelas.php?pesan=hapus");
?>