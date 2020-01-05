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
	 <a href="../login/logout.php"><button  type="button" class="btn btn-outline-success my-2 my-sm-0" >Keluar</button></a>
   </form>
 

    
    
        
        
  </div>

</nav>
<fieldset>
	<div class= container> 
				<form method="get" action="">
				<form action="" method="get">
				<input type="date" name="date">
				<button type="submit" >cari</button>
				</form>
				
					<legend>Absensi Siswa </legend>
					<table width="40% " border="1px" class="table table-bordered table-striped mb-0"style=" border-collapse:collapse;">

						<tr class='baris'>
							
							<th><center>Tanggal</center></th>
							<th><center>Jam</center> </th>
							<th><center>Status</center></th>
						</tr>
						<?php 
						   $q = mysqli_query($host, "SELECT * FROM tb_login where username='$_SESSION[orangtua]'");
						   $d = mysqli_fetch_array($q);
						$where = "";
						if(isset($_GET['date'])){
							$where = "and ta.tanggal_absen like '%$_GET[date]%' ";
						}
						// echo "SELECT * FROM `tb_absen` ta JOIN tb_siswa ts on ta.nis=ts.nis WHERE ta.nis='$_SESSION[siswa]' $where ";
						$q = mysqli_query($host, "SELECT * FROM `tb_absen` ta JOIN tb_siswa ts on ta.nis=ts.nis WHERE ta.nis='$d[aksesdata]' $where ");
						while ($d = mysqli_fetch_array($q)){ 
						?>
						<tr class='baris'> 
							<td><?= $d['tanggal_absen'] ?></td>
							<td><?= $d['kode_jam'] ?></td>
							<td><?= $d['kode_status'] ?></td>
						</tr>
						<?php } ?>
					</table>
				
				</form>
				</div>
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
            
</body>
 
</html>

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
} else {
	header("location: login.php");
}
?>
