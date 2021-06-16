<?php

$host ="localhost";
$user = "root";
$pass = "";
$database = "ipbroom";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi){
	$buka = mysqli_select_db($koneksi, $database);
	echo " ";
	if (!$buka){
		echo"Database tidak terhubung";
	}
}else{
	echo "MYSQL";
}

?>