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
                                <a class="nav-link" href="../jadwal/jadwal.php"></i>Jadwal</a>
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
            <div class="card container" style="width: 100%;">
            <div class="card-header">

            <legend>Absensi Siswa </legend>

            </div>
            <br>
			<form action="" method="get">
			<input type="date" name="date">
			<button type="submit" >cari</button>
            </form>
            <br>
			<fieldset>

				<form method="post" action="">
					
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
						$sql = mysqli_query($host,"select * from tb_siswa") or die(mysql_error());//manggil koneksinya
                        while($data = mysqli_fetch_array($sql)){ //menampilkan data berupa array
                            // echo "<pre>";
                            // echo "SELECT * FROM tb_absen where nis='$data[nis]' and tanggal_absen like '%$_GET[date]%'";
                            
							$no++;
						?>
						<tr>
							<td><?php echo $data["nis"]; ?> <input type="hidden" name="nis[]" value="<?php echo $data["nis"]; ?>"></td>
							<td><?php echo $data["nisn"]; ?></td>
							<td><?php echo $data["nama_siswa"]; ?></td>
							<td><?php echo $data["jenis_kelamin"]; ?></td>
                            <?php 
                            $index = 1;
                            $cekdata = mysqli_query($host, "SELECT * FROM tb_absen where nis='$data[nis]' and tanggal_absen like '%$_GET[date]%'");
                            while($res = mysqli_fetch_array($cekdata)){
                            
                            ?>
                            <td>
                                <input type="hidden" name="id_absen[]" value="<?= $res['id_absen'] ?>">
								<select name="kehadiran<?= $index ?>[]"> 
									<option <?= ($res['kode_status'] == "a" ? 'selected' : '') ?> value="a">A</option>
									<option <?= ($res['kode_status'] == "h" ? 'selected' : '') ?> value="h">H</option>
									<option <?= ($res['kode_status'] == "s" ? 'selected' : '') ?> value="s">S</option>
									<option <?= ($res['kode_status'] == "i" ? 'selected' : '') ?> value="i">I</option>
						
								</select> 
							</td>
                            <?php $index++;} ?>							
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
    $id_absen = $_POST['id_absen'];
        $nis = $_POST['nis'];
        echo "<pre>";
        // print_r($id_absen);
        $index = 0;
	for($i = 0; $i < $no;$i++){
		// $data["nis"];
		$kode_kelas = 2;
		$kode_jam = 1;
		if($kehadiran1[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran1[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='1'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran2[$i] != ""){
            // echo "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran2[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='2'  and id_absen='$id_absen[$index]'";
            // echo "<br>";
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran2[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='2'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran3[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran3[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='3'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran4[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran4[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='4'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran5[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran5[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='5'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran6[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran6[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='6'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran7[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran7[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='7'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran8[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran8[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='8'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran9[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran9[$i]' where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='9'  and id_absen='$id_absen[$index]'");
            $index++;
		}

		if($kehadiran10[$i] != ""){
            $q = mysqli_query($host, "UPDATE tb_absen set nis='$nis[$i]', kode_kelas = '$kode_kelas', kode_status = '$kehadiran10[$i]'  where tanggal_absen like '%$_GET[date]%' and nis='$nis[$i]' and kode_jam='10' and id_absen='$id_absen[$index]'");
            $index++;
        }
        
	}
	//echo "<pre>";
	//print_r($_POST['kehadiran1']);
    //echo "frengki";
    echo "<script>alert('berhasil update absensi');window.location='../laporan/laporan_absen.php';</script>";
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