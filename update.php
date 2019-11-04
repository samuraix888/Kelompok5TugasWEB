<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$Kelas = $_POST['Kelas'];
$Semester = $_POST['Semester'];
$TahunAjaran = $_POST['TahunAjaran'];
 
mysqli_query($host, "UPDATE user SET nama='$nama', Kelas='$Kelas', Semester='$Semester', TahunAjaran='$TahunAjaran' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>