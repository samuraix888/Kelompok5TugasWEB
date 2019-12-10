<?php 
include 'koneksi_pengumuman.php';

$pengumuman = $_POST['pengumuman'];
mysqli_query($host, "INSERT INTO tb_pengumuman VALUES('','$pengumuman')");
 
header("location:pengumuman.php?pesan=inputsucces");
?>