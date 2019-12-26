<?php 
include 'koneksi_kelas.php';
// echo "<pre>";
// print_r($_POST);
$kode_kelas = $_POST['kode_kelas'];
$kelas = $_POST['kelas'];


mysqli_query($host, "INSERT INTO tb_kelas VALUES('$kode_kelas','$kelas','')");


echo mysqli_error($host);

//echo "INSERT INTO user VALUES($kodekelas','$Kelas')";
header("location:index_kelas_admin.php?pesan=input")

?>