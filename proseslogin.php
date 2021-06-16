<?php
include "function.php";

$email = $_POST['email'];
$password = $_POST['password'];


if (!empty($email) && !empty($password)){
	$sql = mysqli_query( $koneksi, "SELECT * FROM user WHERE Email ='$email' AND Password ='$password'");
	$result = mysqli_num_rows($sql);
	if($result){
		echo "<script>alert ('Anda berhasil login')</script>";
		header ("refresh:0;index-user.php");
	
	} else {
	echo "<script>alert ('Anda tidak berhasil login ! Email dan Password tidak terdaftar')</script>";
	header ("refresh:0;login-page.php");
}

}else{
	echo "<script>alert ('Anda tidak berhasil login, email atau password salah')</script>";
	header ("refresh:0;login-page.php");
}

?>