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
 <title>BIODATAKU</title>


</head>

</html>

