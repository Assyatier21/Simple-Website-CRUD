	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>DATA KAMAR</title>
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
		.btn
		{
			color: white;
		}
	</style>
	</head>
	<body>
	
	<!-- Navbar Start -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="col-sm-1 mr-5">
			<a href="home.php"><img src="img/3.png" alt="" style="width: 150px;"></a>
		</div>
		<div class="col-sm-10">
		  <div class="collapse navbar-collapse mt-3 ml-2" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="home.php"><h5>Home <span class="sr-only">(current)</span></h5></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="formtampil.php"><h5>Lihat Database</h5></a>
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
			<h4 align="center"><b>FASILITAS RUMAH SAKIT HARAPAN KITA</b></h4>
			<div class="table-responsive">
				<table border="1"  align="center" width="1200" class="table table-striped" id="datatables">
					<thead>
					<tr align="center" class="head">
						<td width="100"><b>DATA</b></td>
						<td width="200">Harga/Hari</td>
						<td width="100">Fasilitas</td>
					</tr>
					</thead>
					<tbody>
						<tr class="body">
							<td align="center">VVIP</td>
							<td align="center">1.000.000 Rupiah</td>
							<td>Single Room, Kamar Mandi, AC + remote, TV LCD 32inch + remote, DVD Player + remote, Meja Mayo, Telepon Intercom, Lemari, Lemari Es, Sofa Bed, Set Meja, Bedside Locker, Welcome Drink, Parcel Buah</td>
						</tr>
						<tr class="body">
							<td align="center">VIP</td>
							<td align="center">800.000 Rupiah</td>
							<td>Single Room, Kamar Mandi, Shower Set (Hot/Cold), AC + Remote, AC + remote, TV LCD 26inch + remote, DVD Player + remote, Meja Mayo, Telepon Intercom, Lemari Pakaian, Lemari Es, Sofa Bed, Set Meja Tamu, Bedside Locker, Welcome Drink, Parcel Buah</td>
						</tr>
						<tr class="body">
							<td align="center">Kelas I</td>
							<td align="center">600.000 Rupiah</td>
							<td>2 Tempat Tidur/kamar, Kamar Mandi, Shower Set, AC + Remote, TV LCD 32inch + remote, Bedside Locker, Meja Mayo, Air Mineral 1,5lt dan 600ml</td>
						</tr>
						<tr class="body">
							<td align="center">Kelas II</td>
							<td align="center">400.000 Rupiah</td>
							<td>4 Tempat Tidur/kamar, Kamar Mandi, Shower Set, AC + Remote, TV LCD 32inch + remote, Bedside Locker, Meja Mayo, Air Mineral 1,5lt dan 600ml</td>
						</tr>
						<tr class="body">
							<td align="center">Kelas III</td>
							<td align="center">250.000 Rupiah</td>
							<td>6-8 Tempat Tidur/kamar, 1-2 Kamar Mandi, AC + RemoteBedside Locker, Air Mineral 1,5lt dan 600ml</td>
						</tr>
					</tbody>
				</table>
			</div>
				<button type="button" class="btn btn-info"><a href="formbayar.php" style="text-decoration: none; color: white;">Isi Data Kembali</a></button>
			<br>
			<br>
		</div>		
	</div>
	</div>	
	<section class="bawah" id="bawah">
				<div class="container">
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