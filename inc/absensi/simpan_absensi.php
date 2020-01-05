<fieldshet> <!--Tag fieldset berfungsi untuk menandai sampai dimana kotak fieldset akan dibuat, sedangkan tag legend berfungsi untuk memberikan judul dari fieldset tersebut. -->

	<?php
	//Method POST akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL.
	include "../koneksi.php";
	$nis = @$_POST['nis']; //variabel inputan
	$nisn = @$_POST['nisn'];
	$nama_siswa = @$_POST['nama_siswa'];
	$jenis_kelamin = @$_POST['jenis_kelamin'];

	$simpan_absensi = @$_POST['tambah'];
	//jika variabel tambah di klik makan data akan diproses
	if($simpan_absensi) {
		if($nis == "" || $nisn == "" || $nama_siswa == "" || $jenis_kelamin == "" ) {
			?>
			<script type="text/javascript">
			alert("inputan tidak boleh ada yang kosong");
		</script>
		<?php
		} else {
			if($pindah) {
			mysqli_query($host, "INSERT into tb_siswa values  ('$nis','$nisn', '$nama_siswa', '$jenis_kelamin')"); //ngasih perintah ke sql
			?>
				<script type="text/javascript">
				alert("tambah data siswa telah berhasil");
				header("location: ?page=absensi");
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