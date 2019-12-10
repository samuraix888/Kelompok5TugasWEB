<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA 5 Jember</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../../style_user.css">
    <!--end off css-->
</head>
<body>



<div style="background:  #00dac6;">
<div class="banner">
  <div class="text-center">
  <h1>SMA Negeri 5 Jember</h1>
<h7>Sistem Monitoring Pelajar Online </h7> 
  </div>

</div>  

<div style="background:  #009688;">
<nav class="navbar navbar-expand-lg navbar-light border border-dark mt-2">
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Absen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nilai</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lain-Lain
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perizinan</a>
        </div>
      </li>
      
    </ul>

    <ul class="navbar-nav float-right">
    <li class="nav-item">
    <a class="nav-link" href="#" style="color: black;">Username</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="#" style="color: black;">Keluar</a>
    </li>
    </ul>
    
        
        
  </div>
  </div>
</div>

</nav>
</div>



<!--end of navbar-->
<div style="background:  #EEE;">
<div class="container pt-5">

  <div class="row">
    <div class="col">
    <center>
        <font size = "+1" color = "black">BIODATA </font>
        </center>
    <div class="card w-100" style="width: 18rem;">
  
  <div class="card-body">
    <div class="text-center">
    <img src="https://i0.wp.com/www.radarbengkuluonline.com/wp-content/uploads/2019/07/Kepala-SMA-M-1sekolah-pirwan-dahiwi.jpg?fit=600%2C718&ssl=1" style="max-width: 50%;" class="avatar img-circle img-thumbnail" alt="avatar">
    </div>
    <div class="card-text">
    <li>NIS : </li>
    <li>NISN : </li>
    <li>Nama : </li>
    <li>TTL : </li>
    <li>Alamat : </li>
    <li>telepon orang tua : </li>
    <li>Email : </li>
</div>   
  </div>
</div>
    </div>
<!--col 1-->

    <div class="col">
    <center>
      <h4 class="panel-title">
        <a  data-toggle="collapse" href="#collapse1" style="color:#000">Pengumuman <i class="fas fa-chevron-down"></i></a>
      </h4>
        </center>
       
        <div id="collapse1" class="panel-collapse collapse">
        <?php 
		include "component/pengumuman/koneksi_pengumuman.php";
		$query_mysql = mysqli_query($host, "SELECT * FROM tb_pengumuman")or die(mysqli_error($host));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
    ?>
    
    <td><?php echo $nomor++; ?>.</td>
			<td><?php echo $data['pengumuman']; ?></td> <br>
      <?php } ?>
   
        </div>
        
   
    
    </div>
    </div>
    
</div>
<!--col 2-->
</div>
<!--end of row-->
<br>
</div>
<!--end of body-->

<div class="footer"style="background-color :#009688;">
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