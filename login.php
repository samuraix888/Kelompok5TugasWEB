<?php
@session_start();
include "koneksi.php";

if(@$SESSION['admin'] || @$_SESSION['operator']){
	header("location: index.php");
} else {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
	background-color: #222;
}

#utama{
	width: 300px;
	margin: 0 auto;
	margin-top: 12%;	
}

#judul{
	padding: 15px;
	text-align: center;
	color:#fff;
	font-size: 20px;
	background-color: #339966;
	border-top-right-radius: 10px;
	border-top-left-radius: : 10px;
	border-bottom: 3px solid #336666;
}

#inputan{
	background-color: #ccc;
	padding: 20px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

input{
	padding: 10px;
	border: 0;
}

.lg{
	width: 240px;
}

.btn{
	background-color: #339966;
	border-radius: 10px;
	color: #fff;
}

.btn:hover{
	background-color: #339966;
	cursor: pointer; 
}

</style>
</head>
<body>

<div id="utama">
	<div id="judul">
		 Halaman Login
	</div>

	<div id="inputan">
	<form action="" method="post">
		<div>
			<input type="text" name="user" placeholder="Username" class="lg" required/>
		</div>
		<div style="margin-top:10px;">
			<input type="password" name="pass" placeholder="Password" class="lg" required/>
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
			?> <script type="text/javascript">alert("Username atau Password gak boleh kosong TOLOL");</script>
		<?php }  else {
			$sql = mysqli_query($conn, "select * from tb_login where username = '$user' and password = md5('$pass')") or die (mysql_error());
			$data = mysqli_fetch_array($sql);
			$cek = mysqli_num_rows($sql);
			if($cek >= 1){
				if($data['level'] == "admin") {
					@$_SESSION['admin'] = $data['kode_user'];

					header("location: index.php");
				} else if ($data['level'] == "operator") {
					@$_SESSION['operator'] = $data['kode_user'];
					header("location: index.php");
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