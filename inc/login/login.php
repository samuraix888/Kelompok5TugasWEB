<?php
@session_start();
include "../koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['siswa'] || @$_SESSION['orangtua']) {
	header("location: ../../index_admin.php");
}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title> halaman login </title>	
	<link rel="stylesheet" href="../../documentation/css/main.css">	

</head>
<body>
	<div id="utama">
		<div id="judul">
			Halaman Login
		</div>
		<div id="inputan">
		<form action="" method="post">
			<div>
				<input type="text" name="user" placeholder="Username" class="lg"/>
			</div>
			<div style="margin-top:10px;">
				<input type="password" name="pass" placeholder="Password" class="lg"/>
			</div>
			<div style="margin-top:10px;">
				<input type="submit" name="login" class="btn"/>
			</div>
		</form>

		<?php
		$user = @$_POST['user'];
		$pass = @$_POST['pass'];
		$login = @$_POST['login'];

			if($login) {
				if($user == "" || $pass == ""){
					?> <script type="text/javascript">alert("Username atau Password gak boleh kosong ");</script>
				<?php }  else {
					$sql = mysqli_query($host, "select * from tb_login where username = '$user' and password = '$pass'") or die (mysql_error());
					$data = mysqli_fetch_array($sql);
					$cek = mysqli_num_rows($sql);
					if($cek >= 1){
						if($data['level'] == "admin") {
							@$_SESSION['admin'] = $data['username'];
							header("location: ../../index_admin.php");
						} else if ($data['level'] == "siswa") {
							@$_SESSION['siswa'] = $data['username'];
							header("location: ../../index.php");
						} else if ($data['level'] == "orangtua") {
							@$_SESSION['orangtua'] = $data['username'];
							header("location: ../../index_ortu.php");
						}
					} else {
						echo "login gagal";
					}
				}}?>
		</div>
	</div>
</body>
</html>


<?php
}
?>