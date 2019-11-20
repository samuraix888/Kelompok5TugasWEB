<?php 
include 'koneksi_jadwal.php';

$kode_jadwal = $_POST['kode_jadwal'];
$kode_kelas = $_POST['kode_kelas'];
$Semester = $_POST['semester'];
$tahun_ajaran = $_POST['tahun_ajaran'];
$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
                    move_uploaded_file($file_tmp, 'file/'.$nama);
                }
            }

 
mysqli_query($host, "INSERT INTO tb_jadwal VALUES('$kode_jadwal','$kode_kelas','$Semester','$tahun_ajaran', '$nama')");
// echo "INSERT INTO user VALUES('','$kodekelas','$Kelas','$Semester','$TahunAjaran')";
header("location:index_jadwal_admin.php?pesan=input")
?>