<?php 
	$koneksi = mysqli_connect("localhost","root","","db_rumahsakit");
	
	$idpembayaran = $_POST["idpembayaran"];
	$tanggal = $_POST["Tanggal"];
	$bulan = $_POST["Bulan"];
	$tahun = $_POST["Tahun"];
	$tgl_bayar = $tahun."-".$bulan."-".$tanggal;
	$idpasien = $_POST["id_pasien"];
	$nama_pasien= $_POST["Nama"];
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

	$simpan = "INSERT INTO tb_pasien(
	idpembayaran_09021281823172, 
	tanggalbayar_09021281823172, 
	idpasien_09021281823172, 
	namapasien_09021281823172, 
	jeniskamar_09021281823172, 
	dokter_09021281823172, 
	jenisberobat_09021281823172, 
	hari_09021281823172, 
	transaksi_09021281823172) 
	VALUES 
	('$idpembayaran',
	'$tgl_bayar',
	'$idpasien',
	'$nama_pasien',
	'$kelas',
	'$Dokter',
	'$Jenis',
	'$hari',
	'$total_transaksi')";

	$sql = mysqli_query($koneksi, $simpan);
	if($sql)
	{
		echo "<script> alert('Data Berhasil Disimpan !');
		location.href='formtampil.php'</script>";
	}
	else
	{
		echo "<script> alert('Data Gagal Disimpan !');
		location.href='formbayar.php'</script>";
	}


?>