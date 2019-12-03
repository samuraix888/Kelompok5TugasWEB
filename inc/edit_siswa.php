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
</fieldshet>