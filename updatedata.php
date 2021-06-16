<?php
include "function.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$no_handphone = $_POST['no_telepon'];

$update = mysqli_query( $koneksi, "UPDATE user SET id_user='$nim', Nama='$nama', Email='$email', No_Handphone='$no_handphone', Jabatan ='$jabatan', Password='$password' ");

if ($update){
	echo "<script> alert ('Data Berhasil Diubah')</script>";
	header ("refresh:0;index-admin.php");
} else {
	echo "<script>alert ('Data Tidak Berhasil Diubah')</script>";
	header ("refresh:0;index-admin.php");
}
?>