<!DOCTYPE html>
<html>

<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">
		<h1>Jadwal Pelajaran</h1>
		<h2>SMA Negeri 5 Jember</h2>

	</div>

	<br />

	<a href="index.php">Lihat Semua Data</a>

	<br />
	<h3>Edit data</h3>

	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($host, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($host));
	$nomor = 1;
	while ($data = mysqli_fetch_array($query_mysql)) {
		?>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="Kelas" value="<?php echo $data['Kelas'] ?>"></td>
				</tr>
				<tr>
					<td>Semester</td>
					
					<td><input type="radio" name="Semester" value="Genap">Genap</td>
					<td><input type="radio" name="Semester" value="Ganjil">Ganjil</td>
					
				</tr>
				<tr>
					<td>Tahun Ajaran</td>

					<td><input type="text" name="TahunAjaran" value="<?php echo $data['TahunAjaran'] ?>"></td>
					</td>

				</tr>
				<tr>
					<td>Unggah Jadwal Pelajaran</td>
					<td><input type="text" name="Unggahjadwal" value="<?php echo $data['Unggahjadwal'] ?>"></td>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>

			</table>
		</form>
	<?php }
	?>
</body>

</html>