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
                               <legend> Tambah Data siswa </legend>
                            </div>

                            <br>
<fieldshet> <!--Tag fieldset berfungsi untuk menandai sampai dimana kotak fieldset akan dibuat, sedangkan tag legend berfungsi untuk memberikan judul dari fieldset tersebut. -->
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td> NIS </td>
				<td>:</td>
				<td><input type="text" name="nis" /></td>
			</tr>
			<tr>
				<td> NISN </td>
				<td>:</td>
				<td><input type="text" name="nisn" /></td>
			</tr>
			<tr>
				<td> Nama Siswa </td>
				<td>:</td>
				<td><input type="text" name="nama_siswa" /></td>
			</tr>
			<tr>
				<td> Tempat </td>
				<td>:</td>
				<td><input type="text" name="tempat" /></td>
			</tr>
			<tr>
				<td> Tanggal Lahir </td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" /></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin" /></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td>:</td>
				<td><input type="text" name="alamat" /></td>
			</tr>
			<tr>
				<td> Foto </td>
				<td>:</td>
				<td><input type="file" name="foto" style="width:155px;"/></td>
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
				<td><input type="submit" name="tambah" value="Tambah" /> <input type="reset" value="Batal" /></td>
			</tr>
		</table>
    </form>
    <br>

	<?php
	//Method POST akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL.
	
	$nis = @$_POST['nis']; //variabel inputan
	$nisn = @$_POST['nisn'];
	$nama_siswa = @$_POST['nama_siswa'];
	$tempat = @$_POST['tempat'];
	$tanggal_lahir = @$_POST['tanggal_lahir'];
	$jenis_kelamin = @$_POST['jenis_kelamin'];
	$kode_kelas = @$_POST['kelas'];
	$alamat = @$_POST['alamat']; 
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = '../../assets/images/';
	$nama_foto = @$_FILES['foto'] ['name'];

	$tambah_siswa = @$_POST['tambah'];
	//jika variabel tambah di klik makan data akan diproses
	if($tambah_siswa) {
		if($nis == "" || $nisn == "" || $nama_siswa == "" || $tempat == "" || $tanggal_lahir == "" || $jenis_kelamin == "" || $alamat == "" || $nama_foto == "" ) {
			?>
			<script type="text/javascript">
			alert("inputan tidak boleh ada yang kosong");
		</script>
		<?php
		} else {
            // print_r($_FILES);
            $pindah = move_uploaded_file($sumber, $target.$nama_foto);
            mysqli_query($host, "INSERT INTO tbd_siswa(nis, kode_kelas, tahun_ajaran)VALUES('$nis', '$kode_kelas', '2019-2020')");
			if($pindah) {
			mysqli_query($host, "INSERT into tb_siswa(nis, nisn, nama_siswa, tempat, tanggal_lahir, jenis_kelamin, alamat, foto) values  ('$nis','$nisn', '$nama_siswa', '$tempat', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$nama_foto')"); //ngasih perintah ke sql
			?>
				<!-- <script type="text/javascript">
				alert("tambah data siswa telah berhasil");
				header("location: ?page=siswa");
				</script> -->
				<?php
			} else {
				?>
				<!-- <script type="text/javascript"> 
				alert("foto gagal di uploud");
				</script> -->
				<?php
			}
		} 
	}

	?>
</fieldshet>
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