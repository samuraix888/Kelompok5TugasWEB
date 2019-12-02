<?php
include "koneksi.php";
$nis = @$_GET['nis'];
mysqli_query($host, "DELETE from tb_siswa where nis = '$nis'") or die (mysql_error());
?>
<script type="text/javascript">
	window.location.href="?page=siswa";
</script>