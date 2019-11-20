<?php 
 
include 'koneksi_jadwal.php';

$kode_kelas = $_POST['kode_kelas'];
$kode_jadwal = $_POST['kode_jadwa;'];
$Kelas = $_POST['Kelas'];
$semester = $_POST['semester'];
$tahun_ajaran = $_POST['tahun_ajaran'];
 
mysqli_query($host, "UPDATE user SET kodekelas='$kode_kelas', Kelas='$kode_jadwal', Semester='$semester', TahunAjaran='$tahun_ajaran'");
 
header("location:input_jadwal.php?pesan=update");
?>