<?php 
include 'koneksi_jadwal.php';
// echo "<pre>";
// print_r($_POST);
$kode_jadwal = $_POST['kode_jadwal'];
$kode_kelas = $_POST['kode_kelas'];
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
			
			echo $kode_kelas;
			echo $kode_jadwal;

mysqli_query($host, "INSERT INTO tb_kelas VALUES('$kode_kelas', '', '$kode_jadwal')");
mysqli_query($host, "INSERT INTO tb_jadwal VALUES('$kode_jadwal', '$nama')");

echo mysqli_error($host);

// echo "INSERT INTO user VALUES('','$kodekelas','$Kelas','$Semester','$TahunAjaran')";
header("location:index_jadwal_admin.php?pesan=input")

?>