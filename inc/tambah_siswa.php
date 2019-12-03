<fieldshet> <!--Tag fieldset berfungsi untuk menandai sampai dimana kotak fieldset akan dibuat, sedangkan tag legend berfungsi untuk memberikan judul dari fieldset tersebut. -->
	<legend> Tambah Data siswa</legend>
	<?php
		
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td> NIS </td>
				<td>:</td>
				<td><input type="text" name="nis" /></td>
			</tr>
			<tr>
				<td> NISN </td>
				<td>:</td>
				<td><input type="text" name="nisn" /></td>
			</tr>
			<tr>
				<td> Nama Siswa </td>
				<td>:</td>
				<td><input type="text" name="nama_siswa" /></td>
			</tr>
			<tr>
				<td> Tempat </td>
				<td>:</td>
				<td><input type="text" name="tempat" /></td>
			</tr>
			<tr>
				<td> Tanggal Lahir </td>
				<td>:</td>
				<td><input type="text" name="tanggal_lahir" /></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin" /></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td>:</td>
				<td><input type="text" name="alamat" /></td>
			</tr>
			<tr>
				<td> Foto </td>
				<td>:</td>
				<td><input type="file" name="foto" /></td>
			</tr>
			<tr>
				<td> </td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /> <input type="reset" value="Batal" /></td>
			</tr>
		</table>
	</form>

	<?php
	//Method POST akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL.
	include "koneksi.php";
	$nis = @$_POST['nis']; //variabel inputan
	$nisn = @$_POST['nisn'];
	$nama_siswa = @$_POST['nama_siswa'];
	$tempat = @$_POST['tempat'];
	$tanggal_lahir = @$_POST['tanggal_lahir'];
	$jenis_kelamin = @$_POST['jenis_kelamin'];
	$alamat = @$_POST['alamat']; 
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_foto = @$_FILES['foto'] ['name'];

	$tambah_siswa = @$_POST['tambah'];
	//jika variabel tambah di klik makan data akan diproses
	if($tambah_siswa) {
		if($nis == "" || $nisn == "" || $nama_siswa == "" || $tempat == "" || $tanggal_lahir == "" || $jenis_kelamin == "" || $alamat == "" || $nama_foto == "" ) {
			?>
			<script type="text/javascript">
			alert("inputan tidak boleh ada yang kosong");
		</script>
		<?php
		} else {
			$pindah = move_uploaded_file($sumber, $target.$nama_foto);
			if($pindah) {
			mysqli_query($host, "INSERT into tb_siswa values  ('$nis','$nisn', '$nama_siswa', '$tempat', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$nama_foto')"); //ngasih perintah ke sql
			?>
				<script type="text/javascript">
				alert("tambah data siswa telah berhasil");
				header("location: ?page=siswa");
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript"> 
				alert("foto gagal di uploud");
				</script>
				<?php
			}
		}
	}

	?>
</fieldshet>