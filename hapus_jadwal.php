<?php 
include 'koneksi_jadwal.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM user WHERE id='$id'")or die(mysqli_error($host));
 
header("location:input_jadwal.php?pesan=hapus");
?>