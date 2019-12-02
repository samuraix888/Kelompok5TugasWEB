<fieldset>
	<legend>Tampil Data Siswa </legend>
	<table width="100% " border="1px" style=" border-collapse:collapse;">
		<tr>
			<th>NIS </th>
			<th>NISN</th>
			<th>Nama Siswa </th>
			<th>Tempat</th>
			<th>Tanggal Lahir </th>
			<th>Jenis Kelamin </th>
			<th>Alamat </th>
			<th>Foto </th>
			<th>Opsi </th>
		</tr>
		<?php
		include "koneksi.php";
		$sql = mysqli_query($host,"select * from tb_siswa") or die(mysql_error());//manggil koneksinya
		while($data = mysqli_fetch_array($sql)){ //menampilkan data berupa array
		?>
		<tr>
			<td><?php echo $data["nis"]; ?></td>
			<td><?php echo $data["nisn"]; ?></td>
			<td><?php echo $data["nama_siswa"]; ?></td>
			<td><?php echo $data["tempat"]; ?></td>
			<td><?php echo $data["tanggal_lahir"]; ?></td>
			<td><?php echo $data["jenis_kelamin"]; ?></td>
			<td><?php echo $data["alamat"]; ?></td>
			<td align="center"><img src="foto/<?php echo $data['foto']; ?>" width="120px"></td>
			<td align="center"> 
				<a href="?page=siswa&action=edit&nis=<?php echo $data['nis']; ?>"><button>Edit</button></a>
				<a onclick="return confirm('Apakah anda yakin menghapus data ini')" href="?page=siswa&action=hapus&nis=<?php echo $data['nis']; ?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</fieldset>