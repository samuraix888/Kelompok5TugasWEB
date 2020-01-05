<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($host,"select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../../index_admin.php");

	// cek jika user login sebagai siswa
	}else if($data['level']=="siswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:../../index.php");	
	}else if($data['level']=="orangtua"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "orangtua";
		// alihkan ke halaman dashboard orangtua
		header("location:../../index_ortu.php");	

		// alihkan ke halaman login kembali
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>