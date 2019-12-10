<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
                                <a class="nav-link active" href="#" >Beranda</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="component/pengumuman/pengumuman.php" >Pengumuman</a>
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
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                <div class="container">
        <form action="koneksi_input_jadwal.php" method="post" enctype="multipart/form-data">
          <table>
            <h3>Input data jadwal pelajaran<h3>
                <tr>
                  <td>Kode Kelas</td>
                  <td> <input type="text" class="form-control" name="kode_kelas">
                  </td>
                </tr>
                <tr>
                  <td> Kelas</td>
                  <td> <input type="text" class="form-control" name="kode_kelas">
                  </td>
                </tr>
               
                    
                  <td>Kode Jadwal</td>
                  <td> 
                  <?php
                  include "koneksi_jadwal.php";
                  // mencari kode barang dengan nilai paling besar
                  $query = "SELECT max(kode_jadwal) as maxKode FROM tb_jadwal";
                  $hasil = mysqli_query($host,$query);
                  $data = mysqli_fetch_array($hasil);
                  $kode_jadwal = $data['maxKode'];
                  // mengambil angka atau bilangan dalam kode anggota terbesar,
                 // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
                    $noUrut = (int) substr($kode_jadwal, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                    $noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                    $char = "JD";
                    $kode_jadwal = $char . sprintf("%03s", $noUrut);
            
                  ?>
                  <input type="text" class="class" name="kode_jadwal" value="<?= $kode_jadwal ?>" readonly>
                  </td>
                </tr>
               
                <tr>
                  <td>Unggah Jadwal</td>
                  <td>
                    <!-- <form action="aksi.php" method="post" enctype="multipart/form-data"> -->
                    <input type="file" name="file">
                    <!-- <input type="submit" name="upload" value="Upload"></td> -->
                </tr>
               
                <tr>
                  <td></td>
                  <td><input type="submit" value="Simpan"></td>
                </tr>
          </table>
        <br>
        </form>
        <table border="1" class="table">
          <tr>
            <th>No</th>
            <th>Kode Jadwal</th>
            <th>Kode Kelas</th>
            <th>kelas</th>
            
            <th>Unggah Jadwal</th>
            <th>Setting</th>
          </tr>
          <?php
          include "koneksi_jadwal.php";
          $query_mysql = mysqli_query($host, "SELECT * FROM tb_jadwal INNER JOIN tb_kelas ON tb_kelas.kode_jadwal = tb_jadwal.kode_jadwal");
        //   $query_mysql = mysqli_query($host, "SELECT tb_jadwal.* FROM tb_jadwal INNER JOIN tb_kelas ON tb_kelas.kode_kelas = tb_jadwal.kode_kelas") or die(mysqli_error($host));
          $nomor = 1;
          
          //echo $query_mysql == true ? "Ya" : "Tidak";
          while ($datas = mysqli_fetch_array($query_mysql)) {
              
            ?>
            <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $datas['kode_jadwal']; ?></td>
              <td><?php echo $datas['kode_kelas']; ?></td>
              <td><?php echo $datas['kelas']; ?></td>
             

              <td><a href="<?php echo "file/".$data['unggah_jadwal']; ?>">lihat jadwal</a></td>

              <td>
                <a class="edit" href="edit_jadwal.php?id=<?php echo $data['kode_jadwal']; ?>">Edit</a> |
                <a class="hapus" href="hapus_jadwal.php?id=<?php echo $data['kode_jadwal']; ?>">Hapus</a>
              </td>
            </tr>

            </form>
          <?php $nomor++; } ?>
        </table>
      </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
                                Motor Pro© 2018 <a href="polije.ac.id">Polije.ac.id</a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
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