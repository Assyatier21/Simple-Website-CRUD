<?php 
			include "koneksi.php";
			$id = $_REQUEST["idbayar"];
			$tampil = "DELETE FROM tb_pasien WHERE idpembayaran_09021281823172='$id'";
			$sql = mysqli_query($koneksi,$tampil);

			if($sql)
			{
				echo "<script> alert('Data Berhasil Dihapus !');
				location.href='formtampil.php'</script>";
			}
			else
			{
				echo "<script> alert('Data Gagal Dihapus !');
				location.href='formtampil.php'</script>";
			}
?>