<?php
@session_start();
include "koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['operator']) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" href='../css/main.css'/>

</head>
<body>
	
<div id="canvas">
	<div id="header">
	SMAN 5 Jember
	</div>

	<div id="menu">
		<ul>
			<li class="utama"><a href="">Beranda</a></li>
			<li class="utama"><a href="">absensi</a>
				<ul>
					<li><a href="">Lihat Data</a></li>
					<li><a href="">Tambah Data</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">jadwal</a>
				<ul>
					<li><a href="">Lihat Data</a></li>
					<li><a href="">Tambah Data</a></li>
				</ul>
			</li>
			<li class="utama right" style="background-color: #f60;"><a href="logout.php">Logout</a></li>
			<li class="utama right">
				<?php
				if(@$_SESSION['admin']){
					$user_terlogin = @$_SESSION['admin'];
				} else if (@$_SESSION['operator']) {
					$user_terlogin = @$_SESSION['operator'];
				}
				$sql_user = mysqli_query($conn,"select * from tb_login where kode_user = '$user_terlogin'") or die (mysql_error());
				$data_user = mysqli_fetch_array($sql_user);
				?>
				<a>Selamat datang, <?php echo $data_user['nama_lengkap']; ?></a>
			</li>
		</ul>
	</div>

	<div id="isi">
	
	

	</div>

	<div id="footer">
		copyright 2100 @13.frengki
	</div>

</body>
</html>

<?php
} else {
	header("location: login.php");
}
?>