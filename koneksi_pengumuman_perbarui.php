<?php
include "koneksi_pengumuman.php";
$kode_pengumuman = $_POST['id'];
$pengumuman = $_POST['pengumuman'];

mysqli_query($host,"UPDATE tb_pengumuman SET pengumuman='$pengumuman' WHERE kode_pengumuman='$kode_pengumuman'");

header("location:pengumuman.php?pesan=update");
?>