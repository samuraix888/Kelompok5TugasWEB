<?php
    include '../koneksi.php';
    
    $kode_pengumuman = $_GET['id'];
    mysqli_query($host,"DELETE FROM tb_pengumuman WHERE kode_pengumuman='$kode_pengumuman'")or die(mysqli_error($host));
    header("location:../../index_admin.php");
?>