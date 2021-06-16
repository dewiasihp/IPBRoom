<?php
include "function.php";

$id = $_GET['ID_RUANGAN'];

$hapus = mysqli_query($koneksi, "DELETE FROM ruangan WHERE id_Ruangan = $id");


if ($hapus){
	echo "<script> alert ('Data Berhasil Dihapus')</script>";
	header ("refresh:2;index-admin.php");
} else {
	echo "<script> alert ('Data Tidak Berhasil Dihapus')</script>";
	header ("refresh:2;index-admin.php");
}

?>