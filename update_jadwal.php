<?php 
 
include 'koneksi_jadwal.php';

$kode_kelas = $_POST['kode_kelas'];
$kode_jadwal = $_POST['kode_jadwal;'];
$unggah_jadwal = $_POST['unggah_jadwal;'];


 
mysqli_query($host, "UPDATE user SET kode_kelas='$kode_kelas', kode_jadwal='$kode_jadwal', unggah_jadwal='$unggah_jadwal'");
 
header("location:edit_jadwal.php?pesan=update");
?>