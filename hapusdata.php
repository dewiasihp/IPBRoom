<?php
include "function.php";

$id = $_GET['ID_USER'];

$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = $id");


if ($hapus){
	echo "<script> alert ('Data Berhasil Dihapus')</script>";
	header ("refresh:2;index-admin.php");
} else {
	echo "<script> alert ('Data Tidak Berhasil Dihapus')</script>";
	header ("refresh:2;index-admin.php");
}

?>