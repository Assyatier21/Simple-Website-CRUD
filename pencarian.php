<?php 
	$pencarian = $_POST['pencarian'];
	include "koneksi.php";
	$sql = "SELECT * FROM tb_pasien WHERE idpasien_09021281823172 LIKE '$pencarian' OR tanggalbayar_09021281823172 LIKE '$pencarian' namapasien_09021281823172 LIKE '$pencarian' OR jeniskamar_09021281823172 LIKE '$pencarian' OR dokter_09021281823172 LIKE '$pencarian' OR jenisberobat_09021281823172 LIKE '$pencarian';";
	$result = mysqli_query($koneksi, $sql);
?>