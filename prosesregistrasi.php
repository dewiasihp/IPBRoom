<?php
include "function.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$no_handphone = $_POST['no_telepon'];

$simpan = mysqli_query( $koneksi, "INSERT INTO user VALUES ('$nim', '$nama', '$email', '$no_handphone', '$jabatan', '$password')");

if ($simpan){
	echo "<script> alert ('Berhasil Disimpan')</script>";
	header ("refresh:0;login-page.php");
} else {
	echo "<script>alert ('Regristrasi Berhasil')</script>";
	header ("refresh:0;login-page.php");
}

?>
