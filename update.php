
<?php 
	include "koneksi.php";
	$id = $_POST["idpembayaran"];
	$idpembayaran = $_POST["idpembayaran"];
	$tanggal = $_POST["Tanggal"];
	$bulan = $_POST["Bulan"];
	$tahun = $_POST["Tahun"];
	$tgl_bayar = $tahun."-".$bulan."-".$tanggal;
	$idpasien = $_POST["id_pasien"];
	$namapasien = $_POST["Nama"];	
	$kelas = $_POST["kelas"];
	$Dokter = $_POST["dokter"];
	$Jenis = $_POST["jenis"];
	$hari = $_POST["hari"];
		
	if($Dokter == "Spesialis")
	{
		$hargadokter = 150000;
	}
	else if($Dokter == "Umum")
	{
		$hargadokter = 50000;
	}

	if($kelas == "VVIP")
	{
		$hargakamar = 1000000;
	}
	else if($kelas == "VIP")
	{
		$hargakamar = 800000;
	}
	else if($kelas == "Kelas I")
	{
		$hargakamar = 600000;
	}
	else if($kelas == "Kelas II")
	{
		$hargakamar = 400000;
	}
	else if($kelas == "Kelas III")
	{
		$hargakamar = 250000;
	}

	// $hargakamar = "SELECT hargakamar_09021281823172 FROM tb_kamar WHERE jeniskamar_09021281823172 = '$kelas'";
	// $hargadokter = "SELECT hargadokter_09021281823172 FROM tb_dokter WHERE dokter_09021281823172 = '$Dokter'";
	$biaya_kamar = ($hari * $hargakamar);
	$biaya_dokter = ($hari * $hargadokter);

	$total_bayar = ($hargadokter + $biaya_kamar);
	$pajak = (0.1 * $total_bayar);
	$total_transaksi = $total_bayar + $pajak;


	$update = "UPDATE 
	tb_pasien 
	SET 
	idpembayaran_09021281823172 = '$idpembayaran', 
	tanggalbayar_09021281823172 =' $tgl_bayar', 
	idpasien_09021281823172 = '$idpasien', 
	namapasien_09021281823172 = '$namapasien', 
	jeniskamar_09021281823172='$kelas',
	dokter_09021281823172='$Dokter', 
	jenisberobat_09021281823172 = '$Jenis', 
	hari_09021281823172 = '$hari', 
	transaksi_09021281823172 = '$total_transaksi'
	WHERE idpembayaran_09021281823172 ='$id';";

	$sql=mysqli_query($koneksi,$update);
	
	if($sql)
	{
		//echo"data berhasil disimpan";
		echo "<script> alert ('Data berhasil diupdate');
		location.href='formtampil.php'</script>";
	 
	}
	else{
		echo"<script> alert ('Data gagal diupdate');
		location.href='formbayar.php'</script>";
	 
	}

?>
