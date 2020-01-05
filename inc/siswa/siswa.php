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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_siswa" aria-controls="submenu_siswa">Siswa</a>
                                <div id="submenu_siswa" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="siswa.php">Lihat Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tambah_siswa.php">Tambah Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../kelas/kelas.php">Tambah Data Kelas</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_absen" aria-controls="submenu_absen">Absensi</a>
                                <div id="submenu_absen" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../laporan/laporan_absen.php">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../absensi/absensi.php">Tambah Data</a>
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
                   <Legend> Tampil Data Siswa</Legend>
                    </div>
                    <br>

	<form action="" method="post" style="padding-bottom: 4px;">
		<select name="kelas" id="">
		<option value="">Pilih Kelas</option>
			<?php
		include "../koneksi.php";
		$qq = mysqli_query($host,"select * from tb_kelas") or die(mysql_error());//manggil koneksinya
		while($dd = mysqli_fetch_array($qq)){
		?>
		<option value="<?= $dd['kode_kelas'] ?>"><?= $dd['kelas'] ?></option>
		<?php } ?>
		</select>
		<button type="submit" name="cari" >Cari</button>
    </form> 
	<div class="dashboard-content tabel-berscroll mb-lg-5">
    <table class="table table-bordered table-striped mb-0">
		<tr class>
			<th><center>NIS </center></th>
			<th><center>NISN</center></th>
			<th><center>Nama Siswa</center> </th>
			<th><center>Tempat</center></th>
			<th><center>Tanggal Lahir</center> </th>
			<th><center>Jenis Kelamin</center> </th>
			<th><center>Alamat</center> </th>
			<th><center>Foto</center> </th>
			<th><center>Aksi</center> </th>
		</tr>
		<?php
		$d = $_POST;
		// print_r($d);
		// echo "select * from tb_siswa where kelas='$d[kelas]'";
		if(isset($d['cari'])){
			// echo "SELECT * from tb_siswa ts JOIN tbd_siswa tbds ON ts.nis=tbds.nis where tbds.kode_kelas='$d[kelas]'";
			$q = mysqli_query($host,"SELECT * from tb_siswa ts JOIN tbd_siswa tbds ON ts.nis=tbds.nis where tbds.kode_kelas='$d[kelas]'");
		}else{
			$q = mysqli_query($host,"select * from tb_siswa") or die(mysql_error());//manggil koneksinya
		}
		while($data = mysqli_fetch_array($q)){ //menampilkan data berupa array
		?>
		<tr>
			<td><?php echo $data["nis"]; ?></td>
			<td><?php echo $data["nisn"]; ?></td>
			<td><?php echo $data["nama_siswa"]; ?></td>
			<td><?php echo $data["tempat"]; ?></td>
			<td><?php echo $data["tanggal_lahir"]; ?></td>
			<td><?php echo $data["jenis_kelamin"]; ?></td>
			<td><?php echo $data["alamat"]; ?></td>
			<td align="center"><img src="../../assets/images/foto/<?php echo $data['foto']; ?>" width="120px"></td>
			<td align="center"> 
				<a href="edit_siswa.php?nis=<?php echo $data['nis']; ?>"><button>Edit</button></a>
				<a onclick="return confirm('Apakah anda yakin menghapus data ini')" href="hapus_siswa.php?nis=<?php echo $data['nis']; ?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
           
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