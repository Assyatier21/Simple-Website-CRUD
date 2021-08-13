	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>DATABASE RUMAH SAKIT</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dataTables/dataTables.min.css">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="icon/css/all.min.css">

	<style>
		body
		{
			background-image: url("img/2.png");
		}
		.head
		{
			background-color: rgb(56,56,56);
			color: white;
		}
		.table
		{
			border-color: white;
		}
	</style>
	</head>
	<body>
	
	<!-- Navbar Start -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="col-lg-1 mr-5">
			<a href="home.php"><img src="img/3.png" alt="" style="width: 150px;"></a>
		</div>
		<div class="col-lg-10">
		  <div class="collapse navbar-collapse mt-3 ml-2" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="home.php"><h5>Home</h5></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="formtampil.php"><h5>Lihat Database<span class="sr-only">(current)</span></h5></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="formbayar.php"><h5>Isi Data</h5></a>
		      </li>
		      <li class="nav-item">
              <a class="nav-link" href="formpencarian.php"><h5>Pencarian Data</h5></a>
            </li>
		    </ul>
		     <a href="logout.php"><button class="btn a btn-outline-danger mb-2" type="submit" name="logout">Logout</button></a>
           </div>
		  </div>
		</nav>
	<!-- Navbar End -->
	
	<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<br>
			<h4 align="center"><b>DATABASE TRANSAKSI PEMBAYARAN RUMAH SAKIT HARAPAN KITA</b></h4>
			<div class="table-responsive">
				<table border="1"  align="center" width="1500" class="table table-striped" id="datatables">
					<thead>
					<tr align="center" class="head">
						<td >ID Bayar</td>
						<td >Tanggal</td>
						<td >ID Pasien</td>
						<td >Nama Pasien</td>
						<td >Kamar</td>
						<td>Spesialis</td>
						<td>Pembayaran</td>
						<td>Inap</td>
						<td>Biaya</td>
						<td width="200">Action</td>
					</tr>
					</thead>
					<tbody>
					<?php 
						$koneksi = mysqli_connect("localhost","root","","db_rumahsakit");
						if(!$koneksi)
						echo "Not Connected!";
					
						$tampil = "SELECT * FROM tb_pasien ORDER BY idpembayaran_09021281823172";
						$sql = mysqli_query($koneksi, $tampil);
						while($data = mysqli_fetch_array($sql))
						{
							?>
								<tr align="center">
									<td><?php echo $data["idpembayaran_09021281823172"]?></td>
									<td><?php echo $data["tanggalbayar_09021281823172"]?></td>
									<td><?php echo $data["idpasien_09021281823172"]?></td>
									<td><?php echo $data["namapasien_09021281823172"]?></td>
									<td><?php echo $data["jeniskamar_09021281823172"]?></td>
									<td><?php echo $data["dokter_09021281823172"]?></td>
									<td><?php echo $data["jenisberobat_09021281823172"]?></td>
									<td><?php echo $data["hari_09021281823172"]?></td>
									<td><?php echo $data["transaksi_09021281823172"]?></td>
									<td>
									<a href="formedit.php?idbayar=<?= $data['idpembayaran_09021281823172']?>"><button type="button" class="btn btn-dark" style="color: white;">Edit</button> </a> 
						     		<a href="hapus.php?idbayar=<?= $data['idpembayaran_09021281823172']?>"><button type="button" class="btn btn-danger" style="color: white;">Hapus</button> </a>
						     		</td>
								</tr>
							<?php
						}
						?>
						</tbody>
				</table>
			</div>
				<button type="button" class="btn btn-info"><a href="formbayar.php" style="text-decoration: none; color: white;">Tambahkan Data</a></button>
			<br>
			<br>
		</div>		
	</div>
	</div>	
	<section class="bawah" id="bawah">
				<div class="container col-lg-12">
								<hr>
					<div class="footer">
						<div class="row">
							<div class="col-md-12">
							<p align="center">Copyright by Muhammad Sholeh - 09021281823172</p>
							</div>
							<div class="col-md-2">
								
							</div>
						</div>
					</div>
				</div>
			</section>


	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="dataTables/dataTables.min.js"></script>
  
	</body>
	</html>