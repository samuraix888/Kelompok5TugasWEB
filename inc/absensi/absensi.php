<?php
@session_start();
include "../koneksi.php";

if(@$_SESSION['admin']==""){
    header("location:../login/login.php");
}

?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MOTOR PRO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../documentation/css/main.css">
    <style>
        .tabel-berscroll{
            max-height :430px;
            overflow-y: scroll;
        }
        .table-wrapper-scroll-y {
display: block;
}
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- start main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- start up navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Motor Pro</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user mr-2"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                   <center><?php echo $_SESSION['admin']; ?></center>
                                   
                                </div>
                                <a class="dropdown-item" href="../login/logout.php"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- start left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Beranda</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item ">
                                <a class="nav-link" href="../../index_admin.php" >Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_siswa" aria-controls="submenu_siswa">Siswa</a>
                                <div id="submenu_siswa" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../siswa/siswa.php">Lihat Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../siswa/tambah_siswa.php">Tambah Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../kelas/kelas.php">Tambah Data Kelas</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_absen" aria-controls="submenu_absen">Absensi</a>
                                <div id="submenu_absen" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../laporan/laporan_absen.php">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="absensi.php">Tambah Data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
							<li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_jadwal" aria-controls="submenu_absen">Jadwal</a>
                                <div id="submenu_jadwal" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../jadwal/lihat_jadwal.php">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../jadwal/jadwal.php">Tambah Data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../nilai/nilai.php"></i>Nilai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ijin/index_list_izin.php"></i>Perizinan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div style="background:  #EEE">
            <div class="dashboard-wrapper">
            <div class="container-fluid pt-4">
			<div class="card container" style="width: 100%; padding-top: 10px">
			<div class="card-header">
			<legend>Absensi Siswa </legend>
			</div>
			<br>
			<form action="edit.php" method="get">
				<input type="date" name="date">
				<button type="submit">cari</button>
			</form>

			<form action="" method="POST" style="padding-top:5px;">
				<select name="kelas">
				<option value="">Pilih Kelas</option>
					<?php
				include "../koneksi.php";
				$qq = mysqli_query($host,"select * from tb_kelas") or die(mysql_error());//manggil koneksinya
				while($dd = mysqli_fetch_array($qq)){
				?>
				<option value="<?= $dd['kode_kelas'] ?>"><?= $dd['kelas'] ?></option>
				<?php } ?>
				</select>
			<button type="submit" name="cari">Cari</button>
			</form>
			<br>
			
			<fieldset>
				<form method="post" action="">
					<div class="table-responsive">
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
						include "../koneksi.php";
						$no = 0;
						$d = $_POST;
						$kelas = 0;
						if(isset($d['cari'])){
							$kelas = $d['kelas'];
							echo "<input type='hidden' name='kelas' value=$kelas>";
							$sql = mysqli_query($host,"SELECT * from tb_siswa ts JOIN tbd_siswa tbds ON ts.nis=tbds.nis where tbds.kode_kelas='$d[kelas]'");
						}else{
							$sql = mysqli_query($host,"SELECT * from tb_siswa ts JOIN tbd_siswa tbds ON ts.nis=tbds.nis") or die(mysql_error());//manggil koneksinya
						}
						while($data = mysqli_fetch_array($sql)){ //menampilkan data berupa array
							$no++;
						?>
						<tr>
							<input type="hidden" name="no" value="<?= $no ?>"> <!-- menyimpan jumlah data -->
							<td><?php echo $data["nis"]; ?> <input type="hidden" name="nis[]" value="<?php echo $data["nis"]; ?>"></td>
							<td><?php echo $data["nisn"]; ?></td>
							<td><?php echo $data["nama_siswa"]; ?></td>
							<td><?php echo $data["jenis_kelamin"]; ?></td>
							<td>
								<select name="kehadiran1[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select> 
							</td>
							<td>
								<select name="kehadiran2[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran3[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran4[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran5[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran6[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran7[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran8[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran9[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
							<td>
								<select name="kehadiran10[]"> 
									<option value="a">A</option>
									<option value="h">H</option>
									<option value="s">S</option>
									<option value="i">I</option>
						
								</select>  
							</td>
						</tr>
						<?php } ?>
					</table>
					</div>
					<button type="submit" name="simpan" class="btn btn-primary float-right" style="margin:12px;">Simpan</button>
				</form>
			</fieldset>

<?php
// $_SESSION['no'] = $no; 
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
	$kelas 		= $_POST['kelas'];
	// echo $_SESSION['no'];
		$nis = $_POST['nis'];
	for($i = 0; $i < $_POST['no'];$i++){
		// $data["nis"];
		$kode_kelas = $kelas;
		$kode_jam = 1;
		if($kehadiran1[$i] != ""){
			// echo $kehadiran1[$i]."<br>";
			// echo "nisnya ".$nis[$i]."<br>";
			// echo "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '2', '$kehadiran1[$i]', '1')";
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran1[$i]', '1')");
		}

		if($kehadiran2[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran2[$i]', '2')");
		}

		if($kehadiran3[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran3[$i]', '3')");
		}

		if($kehadiran4[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran4[$i]', '4')");
		}

		if($kehadiran5[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran5[$i]', '5')");
		}

		if($kehadiran6[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran6[$i]', '6')");
		}

		if($kehadiran7[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran7[$i]', '7')");
		}

		if($kehadiran8[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran8[$i]', '8')");
		}

		if($kehadiran9[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran9[$i]', '9')");
		}

		if($kehadiran10[$i] != ""){
			$q = mysqli_query($host, "INSERT INTO tb_absen(nis, kode_kelas, kode_status, kode_jam) VALUES('$nis[$i]', '$kode_kelas', '$kehadiran10[$i]', '10')");
		}
	}
	//echo "<pre>";
	//print_r($_POST['kehadiran1']);
	//echo "frengki";
}


?>

					</div>
			
			 <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
			<div class="footer">
                <center>
                  <p>Copyright &copy;POLIJE 2019 - MotorPro</p>
                </center>
                </div>
			
				</div>
			
           
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../../assets/libs/js/main-js.js"></script>
</body>
 
</html>