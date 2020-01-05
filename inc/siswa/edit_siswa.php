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
        <div class="dashboard-wrapper">
            <div class="container-fluid pt-4 w-100">
                    <div class="card container" style="width: 100%;">
                            <div class="card-header">
                            <legend> Edit Data Siswa </legend>
                            </div>
                            <br>
<fieldshet>
	<?php
	include "../koneksi.php";
	$nis = @$_GET['nis'];
	$sql = mysqli_query($host, "select * from tb_siswa where nis = '$nis' ") or die (mysql_error());
	$data = mysqli_fetch_array($sql);
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td> NIS </td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['nis']; ?>" /></td>
			</tr>
			<tr>
				<td> NISN </td>
				<td>:</td>
				<td><input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" /></td>
			</tr>
			<tr>
				<td> Nama Siswa </td>
				<td>:</td>
				<td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>"/></td>
			</tr>
			<tr>
				<td> Tempat </td>
				<td>:</td>
				<td><input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" /></td>
			</tr>
			<tr>
				<td> Tanggal Lahir </td>
				<td>:</td>
				<td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" /></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>"/></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" /></td>
			</tr>
			<tr>
				<td> Foto </td>
				<td>:</td>
				<td><input type="file" name="foto" value="<?php echo $data['foto']; ?>" /></td>
			</tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><select name="kelas" id="">
		<option value="">Pilih Kelas</option>
			<?php
		include "../koneksi.php";
		$sql = mysqli_query($host,"select * from tb_kelas") or die(mysql_error());//manggil koneksinya
		while($data = mysqli_fetch_array($sql)){
		?>
		<option value="<?= $data['kode_kelas'] ?>"><?= $data['kelas'] ?></option>
		<?php } ?>
		</select></td>
            </tr>
			<tr>
				<td> </td>
				<td></td>
				<td><button input type="submit" name="edit" value="Edit" >Selesai</button>  <a href="siswa.php"><button type="button">Batal</button></a></td>
			</tr>
		</table>
	</form>
    <br>

	<?php
	include "../koneksi.php";
	$nis = @$_POST['nis']; //variabel inputan
	$nisn = @$_POST['nisn'];
	$nama_siswa = @$_POST['nama_siswa'];
	$tempat = @$_POST['tempat'];
	$tanggal_lahir = @$_POST['tanggal_lahir'];
	$jenis_kelamin = @$_POST['jenis_kelamin'];
	$alamat = @$_POST['alamat']; 
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = '../../assets/images/foto/';
	$nama_foto = date("YMDHis").".png";

	$edit_siswa = @$_POST['edit'];

	//jika variabel tambah di klik makan data akan diproses
	if($edit_siswa) {
		if($nis == "" || $nisn == "" || $nama_siswa == "" || $tempat == "" || $tanggal_lahir == "" || $jenis_kelamin == "" || $alamat == "" ) {
			?>
			<script type="text/javascript">
			alert("inputan tidak boleh ada yang kosong");
		</script>
		<?php
		} else {
			if($nama_foto == ""){
				
				mysqli_query($host, "UPDATE tb_siswa set nis = '$nis', nisn = '$nisn', nama_siswa = '$nama_siswa', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat ='$alamat'  WHERE nis='$nis'");
				?>
				<script type="text/javascript">
					alert("edit data siswa telah berhasil");
					header("location: siswa.php");
					</script>
				<?php
			} else {
				$pindah = move_uploaded_file($sumber, $target.$nama_foto);
				if($pindah) {
					// echo "UPDATE tb_siswa set  nis = '$nis', nisn = '$nisn', nama_siswa = '$nama_siswa', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat ='$alamat', foto = '$nama_foto'  WHERE nis='$nis'";
				mysqli_query($host, "UPDATE tb_siswa set  nis = '$nis', nisn = '$nisn', nama_siswa = '$nama_siswa', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat ='$alamat', foto = '$nama_foto'  WHERE nis='$nis'"); //ngasih perintah ke sql
				?>
					<script type="text/javascript">
					alert("edit data siswa telah berhasil");
					window.location(" siswa.php");
					</script>
					<?php
				} else {
					?>
					<script type="text/javascript"> 
					alert("foto gagal di uploud");
					</script>
					<?php
				}
			}
	}
}
	?>

</fieldshet>
</div>	
            </form>
        </div>
             <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <center>
                  <p>Copyright &copy;POLIJE 2019 - MotorPro</p>
                </center>
                </div>
          </div>

  </div>
                
           
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