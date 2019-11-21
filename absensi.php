<fieldset>
	<form method="post" action="">
		<legend>Absensi Siswa </legend>
		<table width="100% " border="1px" style=" border-collapse:collapse;">
			<tr>
				<th rowspan="2">NIS </th>
				<th rowspan="2">NISN</th>
				<th rowspan="2">Nama Siswa </th>
				<th rowspan="2">L/P</th>
				<th colspan="10">Absensi Siswa Jam Ke </th>
			</tr>
			<tr> 
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
			</tr>
			<?php
			include "koneksi.php";
			$no = 0;
			$sql = mysqli_query($host,"select * from tb_siswa") or die(mysql_error());//manggil koneksinya
			while($data = mysqli_fetch_array($sql)){ //menampilkan data berupa array
				$no++;
			?>
			<tr>
				<td><?php echo $data["nis"]; ?> <input type="hidden" name="nis[]" value="<?php echo $data["nis"]; ?>"></td>
				<td><?php echo $data["nisn"]; ?></td>
				<td><?php echo $data["nama_siswa"]; ?></td>
				<td><?php echo $data["jenis_kelamin"]; ?></td>
				<td>
					<select name="kehadiran1[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select> 
				</td>
				<td>
					<select name="kehadiran2[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran3[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran4[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran5[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran6[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran7[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran8[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran9[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
				<td>
					<select name="kehadiran10[]"> 
						<option value="">-</option>
						<option value="h">H</option>
						<option value="s">S</option>
						<option value="i">I</option>
						<option value="a">A</option>
					</select>  
				</td>
			</tr>
			<?php } ?>
		</table>
		<button type="submit" name="simpan" class="btn btn-primary float-right" style="margin:12px;">Simpan</button>
	</form>
</fieldset>

<?php 
if(isset($_POST['simpan'])){
	$kehadiran1 = $_POST['kehadiran1'];
	$kehadiran2 = $_POST['kehadiran2'];
	$kehadiran3 = $_POST['kehadiran3'];
	$kehadiran4 = $_POST['kehadiran4'];
	$kehadiran5 = $_POST['kehadiran5'];
	$kehadiran6 = $_POST['kehadiran6'];
	$kehadiran7 = $_POST['kehadiran7'];
	$kehadiran8 = $_POST['kehadiran8'];
	$kehadiran9 = $_POST['kehadiran9'];
	$kehadiran10 = $_POST['kehadiran10'];
	for($i = 0; $i < $no;$i++){
		// $data["nis"];
		$nis = $_POST['nis'];
		$kode_kelas = 2;
		$kode_jam = 1;
		if($kehadiran1[$i] != ""){
			// echo $kehadiran1[$i]."<br>";
			// echo "nisnya ".$nis[$i]."<br>";
			// echo "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '2', '$kehadiran1[$i]', '1')";
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran1[$i]', '$kode_jam')");
		}

		if($kehadiran2[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran2[$i]', '$kode_jam')");
		}

		if($kehadiran3[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran3[$i]', '$kode_jam')");
		}

		if($kehadiran4[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran4[$i]', '$kode_jam')");
		}

		if($kehadiran5[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran5[$i]', '$kode_jam')");
		}

		if($kehadiran6[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran6[$i]', '$kode_jam')");
		}

		if($kehadiran7[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran7[$i]', '$kode_jam')");
		}

		if($kehadiran8[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran8[$i]', '$kode_jam')");
		}

		if($kehadiran9[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran9[$i]', '$kode_jam')");
		}

		if($kehadiran10[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran10[$i]', '$kode_jam')");
		}
	}
	//echo "<pre>";
	//print_r($_POST['kehadiran1']);
	//echo "frengki";
}


?>