<!DOCTYPE html>
<html>
<head>
	<title>MOTOR PRO</title>

<link rel="stylesheet" href='css/main.css'/>
<link rel="stylesheet" href='css/bootstrap.css'/>	

</head>
<body>

<div id= canvas>
	
	<div class="container">
	<div id="header">
	SMA Negeri 5 Jember
	</div>

	<div id="menu">

		<ul class="main-navigation">
				 <li class="utama"><a href="/motor_pro"> Dasboard </a></li>
			   <li><a href="#">Data Master</a>
			    <ul>
			      <li ><a href="#">Data Jurusan</a>
			      		<ul>
			              <li><a href="#?page=jurusan">lihat data</a></li>
			              <li><a href="#">edit data</a></li>
			                </ul>
			        </li>
			      <li><a href="#">Data Kelas</a>
			            <ul>
			              <li><a href="#?page=kelas">lihat data</a></li>
			              <li><a href="#">edit data</a></li>
			                </ul>
			              </li>
			            </ul>
			      </li>
				<li class="utama"><a href=""> Data Siswa </a> 
				<!-- kitakasih parameter page=siswa karena parameter pertama menggunakan tanda tanya? -->
					<ul>
						<li><a href="?page=siswa"> lihat data </a></li>
						<li><a href="?page=siswa&action=tambah"> tambah data </a></li>
					</ul>
				</li>
				<li class="utama"><a href="">  Jadwal Pelajaran </a>
					<ul>
						<li><a href="?page=jadwal"> lihat data </a></li>
						<li><a href=""> edit data </a></li>
					</ul>
				</li>
					<li class="utama"><a href="">  Data Absensi </a>
					<ul>
						<li><a href="?page=absensi"> lihat data </a></li>
						<li><a href=""> edit data </a></li>
					</ul>
				</li>
				<li class="utama"><a href="">  Laporan Nilai Siswa </a>
					<ul>
						<li><a href="?page=nilai"> lihat data </a></li>
						<li><a href=""> edit data </a></li>
					</ul>
				</li>
				<ul>
			<li class="utama"><a href="?page=izin"> Lain-lain </a></li>
			<li class="utama right" style="background-color: #f60;"><a href="logout.php">Logout</a></li>
			
		</ul>
	</ul>
		
	</div>  
		<div id= "isi">
			<?php
			$page= @$_GET['page']; //  method GET menampilkan nilai variabel yang dikirimkan
			
			$action= @$_GET['action'];
			if ($page == "siswa") {
				if ($action == "") {
					include "inc/siswa.php";
				} else if($action == "tambah"){
					include "inc/tambah_siswa.php";
				} else if($action == "edit"){
					include "inc/edit_siswa.php";
				}
			} else if($page == "jadwal") {
				echo "ini adalah halaman jadwal";
			} else if($page == "absensi") {
				include "inc/absensi.php";
				} else if($action == "simpan"){
					include "inc/simpan_absensi.php";;
			} else if($page == "nilai") {
				echo "ini adalah halaman jadwal";
			} else if($page == "izin") {
				echo "ini adalah halaman jadwal";
			} else if($page == "") {
				echo "ini adalah halaman utama";
			} else if($page == "jurusan") {
				echo "ini adalah halaman jurusan";
			} else if($page == "kelas") {
				echo "ini adalah halaman kelas";
			} else {
				echo "halaman tidak ditemukan";
			}
			?>
		</div>

		<div id= "footer">
		Frengki Elistanto
		</div>
	</div>
</div>
</body>
</html>