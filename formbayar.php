<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Form Pembayaran Biaya Rumah Sakit</title>
	<style>
		
		body
		{
			background-image: url("img/2.png");
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
		      <li class="nav-item">
		        <a class="nav-link" href="home.php"><h5>Home</h5></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="formtampil.php"><h5>Lihat Database</h5></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="formbayar.php"><h5>Isi Data</h5></a>
		      </li>
		     <li class="nav-item">
              <a class="nav-link" href="formpencarian.php"><h5>Pencarian Data</h5></a>
            </li>
		    </ul>
		      <a href="logout.php"><button class="btn btn-outline-danger mb-2" type="submit" name="logout">Logout</button></a>
		   </div>
		  </div>
		</nav>
	
	<!-- Navbar End -->


	<br>
	<h4 align="center"><b>TRANSAKSI PEMBAYARAN RUMAH SAKIT HARAPAN KITA</b></h4>
	<div class="container" style="width: 900px;">
		<hr>
	</div>
	<div class="container mt-5">
		<div class="container" style="width: 500px;">
		<div class="form-group row">
		    <label for="" class="col-sm-4 col-form-label">Fasilitas Kamar</label>
		    <div class="col-sm-8">
		      <a href="kamar.php"><button class="btn btn-outline-dark" style="margin-right: -10px;">Lihat Data Fasilitas Kamar</button></a>
		    </div>
		  </div>	
		  <form action="simpan.php" method="POST">
		  <div class="form-group row">
		    <label for="id_pembayaran" class="col-sm-4 col-form-label">ID Pembayaran</label>
		    <div class="col-sm-8">
		    	<input type="text" class="form-control" id="inputIdPembayaran" name="idpembayaran" placeholder="ID Pembayaran">
		    </div>
		  </div>		
		  <div class="form-group row">
		    <label for="tgl_pembayaran" class="col-sm-5 col-form-label">Tanggal Pembayaran</label>
		    <div class="col-sm-7" align="right">
		    	<select class="custom-select col-sm-3 mr-sm-2" id="inlineFormCustomSelect" name="Tanggal" id="TTL">
	        		<?php 
						for ($i=1; $i <= 31 ; $i++)
						{ 
							echo "<option value='$i'> $i </option>";
						}
					?>
				</select>
				<select class="custom-select col-sm-3 mr-sm-2" id="inlineFormCustomSelect" name="Bulan" id="TTL">
	        		<?php 
						for ($i=1; $i <= 12 ; $i++)
						{ 
							echo "<option value='$i'> $i </option>";
						}
					?>
				</select>		
				<select class="custom-select col-sm-4 mr-sm-2" id="inlineFormCustomSelect" name="Tahun" id="TTL">
					<option value="2018">2018</option>
					<option value="2019">2019</option>
				</select> 
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="idpasien" class="col-sm-4 col-form-label">ID Pasien</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="inputIdPembayaran" name="id_pasien" placeholder="ID Pasien">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="namapasien" class="col-sm-4 col-form-label">Nama Pasien</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="inputIdPembayaran" name="Nama" placeholder="Nama Lengkap">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="kamarpasien" class="col-sm-4 col-form-label">Kelas Rawat Inap</label>
		    <div class="col-sm-8">
		      <select class="custom-select" name="kelas">
				<option value="VVIP">VVIP</option>
				<option value="VIP">VIP</option>
				<option value="Kelas I">Kelas I</option>
				<option value="Kelas II">Kelas II</option>
				<option value="Kelas III">Kelas III</option>
			  </select>
		    </div>
		  </div>

		  <div class="form-group row">
		  <label for="namapasien" class="col-sm-4 col-form-label">Spesialis Dokter</label>
		    <div class="col-sm-8">
		      <div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio"  id="gridRadios1" value="Spesialis" name="dokter">
		          <label class="form-check-label mr-5" for="gridRadios1">Spesialis</label>
		          <input class="form-check-input" type="radio"  id="gridRadios1" value="Umum" name="dokter">
		          <label class="form-check-label" for="gridRadios1">Umum</label>
		        </div>
		       </div>
		     </div>
	    	</div>

			<div class="form-group row">
			  <label for="namapasien" class="col-sm-4 col-form-label">Pembayaran</label>
			    <div class="col-sm-8">
			      <div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" id="gridRadios1" value="BPJS" name="jenis">
			          <label class="form-check-label mr-5" for="gridRadios1">BPJS</label>
			          <input class="form-check-input" type="radio" id="gridRadios1" value="Asuransi" name="jenis">
			          <label class="form-check-label mr-5" for="gridRadios1">Asuransi</label>
			          <input class="form-check-input" type="radio" id="gridRadios1" value="Cash" name="jenis">
			          <label class="form-check-label" for="gridRadios1">Cash</label>
			        </div>
		     	  </div>
		     	</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="idpasien" class="col-sm-4 col-form-label">Lama Inap</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="inputIdPembayaran" name="hari" placeholder="Jumlah Hari">
			    </div>
			</div>
			<br>
			<center>
			<div class="container">
			  <div class="form-group row" align="center">
			      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" name="submit" class="btn btn-primary mr-3">Simpan</button>
			      <button type="reset" name="reset" class="btn btn-primary">Reset</button>

			  
			  </div>
			</div>
			</center>
		 </div>
	</form>
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
								<i class="fab fa-twitter"></i>
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-instagram"></i>
								<i class="fas fa-thumbs-up"></i>
								<i class="fas fa-envelope"></i>
							</div>
						</div>
					</div>
				</div>
			
			</section>


	<script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>	