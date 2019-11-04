<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$Kelas = $_POST['Kelas'];
$Semester = $_POST['Semester'];
$TahunAjaran = $_POST['TahunAjaran'];
 
mysqli_query($host, "INSERT INTO user VALUES('','$nama','$Kelas','$Semester','$TahunAjaran', '')");
// echo "INSERT INTO user VALUES('','$nama','$Kelas','$Semester','$TahunAjaran')";
header("location:index.php?pesan=input")
?>