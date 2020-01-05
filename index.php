<?php
@session_start();
include "inc/koneksi.php";

if(@$_SESSION['siswa']==""){
    header("location:inc/login/login.php");
}

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
    <link rel="stylesheet" href="documentation/css/main.css">
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



<nav class="navbar navbar-dark py-0 bg-primary navbar-expand-lg py-md-0">
    <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="navbar-collapse collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item py-0"><a href="index.php" class="nav-link">Beranda</a></li>
            <li class="nav-item py-0"><a href="index_absen.php" class="nav-link">Absensi</a></li>
            <li class="nav-item py-0"><a href="" class="nav-link">Nilai</a></li>
            <li class="nav-item py-0"><a href="#" class="nav-link">Jadwal</a></li>
        
        </ul>
    </div>
</nav>
<!--end of navbar-->

<!--start body-->
<div class="container pt-4">

  <div class="row">
    <div class="col-7">
        <center>
          <h4>Biodata</h4>
           
        </center>
    <div class="card w-100">
  
  <div class="card-body" style="background-color: #eceeef;">
   
    <?php 
    $q = mysqli_query($host, "SELECT * FROM tb_login where username='$_SESSION[siswa]'");
    $d = mysqli_fetch_array($q);
		$query_mysql = mysqli_query($host, "SELECT * FROM tb_siswa where nis='$d[username]'")or die(mysqli_error($host));
		$nomor = 1;  
    $data = mysqli_fetch_array($query_mysql)
      ?>
       <div class="text-center">
    <?php echo "<img src='assets/images/foto/$data[foto]' width='70' height='90' />";?>
    </div>
        <div class="card-text">
            <li>NIS  : <?= $data['nis'] ?></li>
            <li>NISN  : <?= $data['nisn'] ?></li>
            <li>Nama : <?= $data['nama_siswa'] ?> </li>
            <li>Tempat, tanggal lahir: <?= $data['tempat'].','.  $data['tanggal_lahir']?> </li>
            <li>Alamat : <?= $data['alamat'] ?> </li>
            
        </div>   
  </div>
</div>
    </div>
<!--col 1-->

    <div class="col-5">
    <center>
      <h4>
      <div class="row responsive">
        <div class="col-sm-8">
           <div class="float-left" style="font-size: 20px">
            Pengumuman 
            </div>
        </div>
        <div class="col-sm-4">
            <div class="float-right">
            <a  data-toggle="collapse" href="#collapse1" style="color:#000"> <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
      </div>
        
      </h4>
    </center>

    <div class="card w-100">
       
       <!-- <div id="collapse1" class="panel-collapse collapse"-->
       <?php 
   $query_mysql = mysqli_query($host, "SELECT * FROM tb_pengumuman")or die(mysqli_error($host));
   $nomor = 1;
   while($data = mysqli_fetch_array($query_mysql)){
   ?>
   
  
     <td><a  data-toggle="collapse" href="#collapse1" style="color:#000"><?php echo $data['judul']; ?></a></td>
     <div id="collapse1" class="panel-collapse collapse">
     <?php echo $data['pengumuman']; ?> </div>

    
     <?php } ?>
  
      
 </div>
 </div>
   
</div>
<!--col 2-->
<!--end of row-->
<br>
</div>
<!--end of body-->

<div class="footer"style="background-color :transparent;">
<center>
  <p>Copyright &copy;POLIJE 2019 - MotorPro</p>
</center>
</div>
<!--end of navbar-->

</div>
<!--end of container-->
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

?>