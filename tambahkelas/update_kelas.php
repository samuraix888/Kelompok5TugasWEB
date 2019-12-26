<?php 
 
include 'koneksi_kelas.php';

$kode_kelas = $_POST['kode_kelas'];

$Kelas = $_POST['kelas'];

 
mysqli_query($host, "UPDATE user SET kode_kelas='$kode_kelas', kelas='$kelas'");
 
header("location:koneksi_input_kelas.php?pesan=update");
?>