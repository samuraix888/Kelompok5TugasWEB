<fieldshet>
	<legend> Edit Data Siswa </legend>
	<?php
	include "koneksi.php";
	$nis = @$_GET['nis'];
	$sql = mysqli_query($host, "select * from tb_siswa where nis = '$nis' ") or die (mysql_error());
	$data = mysqli_fetch_array($sql);
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td> NIS </td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['nis']; ?>" /></td>
			</tr>
			<tr>
				<td> NISN </td>
				<td>:</td>
				<td><input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" /></td>
			</tr>
			<tr>
				<td> Nama Siswa </td>
				<td>:</td>
				<td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>"/></td>
			</tr>
			<tr>
				<td> Tempat </td>
				<td>:</td>
				<td><input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" /></td>
			</tr>
			<tr>
				<td> Tanggal Lahir </td>
				<td>:</td>
				<td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" /></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>"/></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" /></td>
			</tr>
			<tr>
				<td> Foto </td>
				<td>:</td>
				<td><input type="file" name="foto" value="<?php echo $data['foto']; ?>" /></td>
			</tr>
			<tr>
				<td> </td>
				<td></td>
				<td><input type="submit" name="edit" value="Edit" /> <input type="reset" value="Batal" /></td>
			</tr>
		</table>
	</form>

	<?php
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

	$edit_siswa = @$_POST['edit'];

	//jika variabel tambah di klik makan data akan diproses
	if($edit_siswa) {
		if($nis == "" || $nisn == "" || $nama_siswa == "" || $tempat == "" || $tanggal_lahir == "" || $jenis_kelamin == "" || $alamat == "" ) {
			?>
			<script type="text/javascript">
			alert("inputan tidak boleh ada yang kosong");
		</script>
		<?php
		} else {
			if($nama_foto == ""){
				
				mysqli_query($host, "UPDATE tb_siswa set nis = '$nis', nisn = '$nisn', nama_siswa = '$nama_siswa', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat ='$alamat'  WHERE nis='$nis'");
				?>
				<script type="text/javascript">
					alert("edit data siswa telah berhasil");
					header("location: ?page=siswa");
					</script>
				<?php
			} else {
				$pindah = move_uploaded_file($sumber, $target.$nama_foto);
				if($pindah) {
					// echo "UPDATE tb_siswa set  nis = '$nis', nisn = '$nisn', nama_siswa = '$nama_siswa', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat ='$alamat', foto = '$nama_foto'  WHERE nis='$nis'";
				mysqli_query($host, "UPDATE tb_siswa set  nis = '$nis', nisn = '$nisn', nama_siswa = '$nama_siswa', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat ='$alamat', foto = '$nama_foto'  WHERE nis='$nis'"); //ngasih perintah ke sql
				?>
					<script type="text/javascript">
					alert("edit data siswa telah berhasil");
					window.location(" ?page=siswa");
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
}
	?>

</fieldshet>