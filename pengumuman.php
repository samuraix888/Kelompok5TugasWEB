<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        .tabel-berscroll{
            max-height :430px;
            overflow-y: scroll;
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
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                             ISI NANTI
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user mr-2"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
SULISTIANTO</h5>
                                    <span class="status"></span><span class="ml-2">ADMIN</span>
                                </div>
                                <a class="dropdown-item" href="#">Account</a>
                                <a class="dropdown-item" href="#">Setting</a>
                                <a class="dropdown-item" href="#"></i>Logout</a>
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
                                <a class="nav-link" href="#" >Beranda</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="component/pengumuman/pengumuman.php" >Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_siswa" aria-controls="submenu_siswa">Siswa</a>
                                <div id="submenu_siswa" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tambah Data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu_absen" aria-controls="submenu_absen">Absensi</a>
                                <div id="submenu_absen" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tambah Data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">Jadwal</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lihat Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tambah Data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></i>Perizinan</a>
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
            <div class="card" style="width: 100%;">
  <div class="card-header">
  <form action="koneksi_pengumuman_tambah.php" method="post">		
		<table>
			<tr>
				<td>Pengumuman : </td>
				<td>
                <textarea name="pengumuman" cols="50"></textarea>
                </td>					
			</tr>				
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>					
			</tr>	
      </form>
    </table>
  </div>
  <ul class="list-group list-group-flush">
  <div class="dashboard-content tabel-berscroll mb-lg-5">
            <table class="table ">
    <tr>
			<th>No</th>
      <th>Pengumuman</th>
      <th>Action</th>
		</tr>
<?php 
		include "koneksi_pengumuman.php";
		$query_mysql = mysqli_query($host, "SELECT * FROM tb_pengumuman")or die(mysqli_error($host));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['pengumuman']; ?></td>

			<td>
				<a class="edit" href="pengumuman_edit.php?id=<?php echo $data['kode_pengumuman']; ?>">Edit</a> |
				<a class="hapus" href="pengumuman_hapus.php?id= <?php echo $data['kode_pengumuman']; ?>">Hapus</a> 			
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
</body>
 
</html>