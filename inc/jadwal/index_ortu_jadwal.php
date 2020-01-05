<?php
@session_start();
include "../koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['siswa'] || @$_SESSION['orangtua']) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA 5 Jember</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../../documentation/css/main.css">
    <style>
    body{
      background-color: white;
    }
    .card li{
      list-style: none;
    }
    </style>
    <!--end off css-->

</head>
<body>
<!--start header-->
<div class="banner" style="background-color: #24a319;">
  <div class="text-center">
  <h1 style="color: white;">SMA Negeri 5 Jember</h1>
<h7 style="color: white;">Sistem Monitoring Pelajar Online </h7> 
  </div>

</div>  
<!-- end of header-->

<!--start navbar-->

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #62d44d ;">
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../index_ortu.php" style="color: white ;">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../absensi/index_ortu_absen.php" style="color: white;">Absen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../jadwal/index_ortu_jadwal.php" style="color: white;">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../nilai/index_ortu_nilai.php" style="color: white;">Nilai</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="../ijin/index_ortu_izin.php" style="color: white;">Perizinan</a>
      </li>
      
    </ul>

    <form class="form-inline my-2 my-lg-0">
   
    <?php echo $_SESSION['orangtua']; ?>
      <a href="inc/login/logout.php"><button type="button" class="btn btn-outline-success my-2 my-sm-0" >Keluar</button></a>
    </form>  
        
  </div>

</nav>

<div style="background:  #EEE">
            <div class="dashboard-wrapper">
            <div class="container-fluid pt-4">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <legend>Data Jadwal Pelajaran</legend>   
                </div>
                         
                <table border="1" class="table">
        
          <?php
          include "../koneksi.php";
          $q = mysqli_query($host, "SELECT * FROM tb_login where username='$_SESSION[orangtua]'");
          $d = mysqli_fetch_array($q);
          
          $query_mysql = mysqli_query($host, "SELECT * FROM tb_jadwal INNER JOIN tb_kelas ON tb_kelas.kode_jadwal = tb_jadwal.kode_jadwal INNER JOIN tbd_siswa ON tbd_siswa.kode_kelas = tb_kelas.kode_kelas WHERE tbd_siswa.nis='$d[aksesdata]'");
        //   $query_mysql = mysqli_query($host, "SELECT tb_jadwal.* FROM tb_jadwal INNER JOIN tb_kelas ON tb_kelas.kode_kelas = tb_jadwal.kode_kelas") or die(mysqli_error($host));
         
          
          //echo $query_mysql == true ? "Ya" : "Tidak";
          $datas = mysqli_fetch_array($query_mysql) ;
              
            ?>
           <center>
            <div style= 'border-width:5px; border-color: white; width:50%; border-style:solid; border-width:5px'> <img style="width:500px; padding: 10px" src="../../assets/images/jadwal/<?php echo $datas['unggah_jadwal']; ?>"/></div>

            
            </center>

            </form>
          
        </table>
      
                
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
</html>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--end of js-->

</html>
<?php
} else {
	header("location: login.php");
}
?>