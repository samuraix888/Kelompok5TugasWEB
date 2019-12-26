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
			
			
 
mysqli_query($host, "UPDATE tb_jadwal SET ('','$kode_kelas', '$nama' WHERE kode_jadwal=$kode_jadwal)");
//echo mysqli_error($host);

header("location:index_jadwal_admin.php?pesan=update");
?>