<!--start login-->
<?php
@session_start();
include "inc/koneksi.php";

if(@$_SESSION['admin']==""){
    header("location:inc/login/login.php");
}
?>
<!--end login-->

<!--start add-->

<?php 
include 'inc/koneksi.php';

@$judul = $_POST['judul'];
@$pengumuman = $_POST['pengumuman'];
@$tambah = $_POST['tambah'];


if(isset($tambah)) {
        mysqli_query($host, "INSERT INTO tb_pengumuman VALUES('','$judul','$pengumuman')");
        header("location:index_admin.php");
        
        } 
?>


<!--end add-->


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MOTOR PRO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="documentation/css/main.css">
    <style>
        .tabel-berscroll{
            max-height :430px;
            overflow-y: scroll;
        }
        .table-wrapper-scroll-y {
display: block;
}
        textarea{
            width: 100%; 
            margin: 0; 
            padding: 0; 
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
                                <a class="dropdown-item" href="inc/login/logout.php">Logout</a>
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
                                <a class="nav-link active" href="index_admin.php" >Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_siswa" aria-controls="submenu_siswa">Siswa</a>
                                <div id="submenu_siswa" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="inc/siswa/siswa.php">Lihat Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="inc/siswa/tambah_siswa.php">Tambah Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="inc/kelas/kelas.php">Tambah Data Kelas</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_absen" aria-controls="submenu_absen">Absensi</a>
                                <div id="submenu_absen" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="inc/laporan/laporan_absen.php">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="inc/absensi/absensi.php">Tambah Data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inc/jadwal/jadwal.php"></i>Jadwal</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inc/nilai/nilai.php"></i>Nilai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inc/ijin/index_list_izin.php"></i>Perizinan</a>
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
 <legend>Data Pengumuman</legend>
</div>
<br>
  <form action="" method="post">		
		<table>
			<tr>
            <td>Judul </td>
				<td>
                <textarea name="judul" cols="50" required></textarea>
                </td>	
                </tr>
                <tr>
            <td>Pengumuman </td>
				<td>
                <textarea name="pengumuman" cols="50" required></textarea>
                </td>					
			</tr>				
			<tr>
				<td></td>
				
                <td><button  input type="submit" name="tambah" value="tambah">tambah</button>				
			</tr>	
      </form>
    </table>

  <ul class="list-group list-group-flush">
  <div class="dashboard-content tabel-berscroll mb-lg-5">
    <table class="table table-bordered table-striped mb-0">
    <tr>
			<th>No</th>
      <th ><center>judul</center></th>
      <th ><center>Pengumuman</center></th>
      <th><center>Aksi<center></th>
		</tr>
<?php 
		include "inc/koneksi.php";
		$query_mysql = mysqli_query($host, "SELECT * FROM tb_pengumuman")or die(mysqli_error($host));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
            <td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['pengumuman']; ?></td>

			<td>
				<a class="edit" href="inc/pengumuman/pengumuman_edit.php?id=<?php echo $data['kode_pengumuman']; ?>">Edit</a> |
				<a class="hapus" href="inc/pengumuman/pengumuman_hapus.php?id= <?php echo $data['kode_pengumuman']; ?>">Hapus</a> 			
			</td>
		</tr>
		<?php } ?>
	</table>               
                </div>
  </ul>
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
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>
</html>
