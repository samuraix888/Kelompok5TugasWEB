<?php 
 
include 'koneksi_jadwal.php';

$kode_kelas = $_POST['kode_kelas'];
$kode_jadwal = $_POST['kode_jadwa;'];
$Kelas = $_POST['Kelas'];

 
mysqli_query($host, "UPDATE user SET kodekelas='$kode_kelas', Kelas='$kode_jadwal'");
 
header("location:input_jadwal.php?pesan=update");
?>