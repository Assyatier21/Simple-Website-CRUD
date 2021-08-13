<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="icon/css/all.min.css">
	<title>Form Update Database</title>
	<style type="text/css">
		body
		{
			background-image: url("img/2.png");
		}
	</style>
</head>
<body>
	<!-- PHP Start -->
	<?php
		include "koneksi.php";
		$id = $_REQUEST['idbayar'];
		$tampil = "SELECT * FROM tb_pasien WHERE idpembayaran_09021281823172 ='$id';";
		$sql  = mysqli_query($koneksi,$tampil);
		$data = mysqli_fetch_array($sql);
		$tgl_bayar = explode("-",$data["tanggalbayar_09021281823172"]);
	?>
	<!-- PHP End -->

	<!-- Content Start -->

	<!-- Navbar Start -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="col-sm-1 mr-5">
			<a href="home.php"><img src="img/3.png" alt="" style="width: 150px;"></a>
		</div>
		<div class="col-sm-10">
		  <div class="collapse navbar-collapse mt-3 ml-2" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="home.php"><h5>Home <span class="sr-only">(current)</span></h5></a>
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
		<form action="update.php" method="POST">
		  
		  <div class="form-group row">
		    <label for="id_pembayaran" class="col-sm-4 col-form-label">ID Pembayaran</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="inputIdPembayaran" name="idpembayaran" value="<?= $data['idpembayaran_09021281823172']?>">
		    </div>
		  </div>		
		  <div class="form-group row">
		    <label for="tgl_pembayaran" class="col-sm-5 col-form-label">Tanggal Pembayaran</label>
		    <div class="col-sm-7" align="right">
		    	<select class="custom-select col-sm-3 mr-sm-2" id="inlineFormCustomSelect" name="Tanggal" id="TTL">
	        		<?php for($i=1;$i<=31;$i++){ ?>
							<option value="<?=$i?>"<?php if($tgl_bayar[2]=="$i")
								{
									echo "selected=selected";
								}?>><?=$i?></option>
						<?php } ?>
				</select>
				<select class="custom-select col-sm-3 mr-sm-2" id="inlineFormCustomSelect" name="Bulan" id="TTL">
	        		<?php for($i=1;$i<=12;$i++){ ?>
							<option value="<?=$i?>"<?php if($tgl_bayar[1]=="$i")
								{
									echo "selected=selected";
								}?>> <?=$i?></option>
						<?php } ?>
				</select>		
				<select class="custom-select col-sm-4 mr-sm-2" id="inlineFormCustomSelect" name="Tahun" id="TTL">
						<?php for($i=2018;$i<=2019;$i++){ ?>
							<option value="<?=$i?>"<?php if($tgl_bayar[0]=="$i")
								{
									echo "selected=selected";
								}?>><?=$i?></option>
						<?php } ?>
				</select> 
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="idpasien" class="col-sm-4 col-form-label">ID Pasien</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="inputIdPembayaran" name="id_pasien" value="<?= $data['idpasien_09021281823172']?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="namapasien" class="col-sm-4 col-form-label">Nama Pasien</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="inputIdPembayaran" name="Nama" value="<?= $data['namapasien_09021281823172']?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="kamarpasien" class="col-sm-4 col-form-label">Kelas Rawat Inap</label>
		    <div class="col-sm-8">
		      <select class="custom-select" name="kelas">
				<option value="VVIP" <?php if($data['jeniskamar_09021281823172']=='VVIP')
						{
							echo "selected=selected";
						}?>> VVIP </option>
						<option value="VIP" <?php if($data['jeniskamar_09021281823172']=='VIP')
						{
							echo "selected=selected";
						}?>> VIP </option>
						<option value="Kelas I" <?php if($data['jeniskamar_09021281823172']=='Kelas I')
						{
							echo "selected=selected";
						}?>> Kelas I </option>
						<option value="Kelas II" <?php if($data['jeniskamar_09021281823172']=='Kelas II')
						{
							echo "selected=selected";
						}?>> Kelas II </option>
						<option value="Kelas III" <?php if($data['jeniskamar_09021281823172']=='Kelas III')
						{
							echo "selected=selected";
						}?>> Kelas III </option>
			  </select>
		    </div>
		  </div>

		  <div class="form-group row">
		  <label for="namapasien" class="col-sm-4 col-form-label">Spesialis Dokter</label>
		    <div class="col-sm-8">
		      <div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio"  id="gridRadios1" value="Spesialis" name="dokter" <?php if($data['dokter_09021281823172']=='Spesialis')
					{
						echo "checked=checked";
					}?>>
		          <label class="form-check-label mr-5" for="gridRadios1">Spesialis</label>
		          <input class="form-check-input" type="radio"  id="gridRadios1" value="Umum" name="dokter" value="Umum" <?php if($data['dokter_09021281823172']=='Umum')
					{
						echo "checked=checked";
					}?>>
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
			          <input class="form-check-input" type="radio" id="gridRadios1" value="BPJS" name="jenis" <?php if($data['jenisberobat_09021281823172']=='BPJS'){
						echo "checked=checked";
						}?>>
			          <label class="form-check-label mr-5" for="gridRadios1">BPJS</label>

			          <input class="form-check-input" type="radio" id="gridRadios1" value="Asuransi" name="jenis" <?php if($data['jenisberobat_09021281823172']=='Asuransi')
					{
						echo "checked=checked";
					}?>>
			          <label class="form-check-label mr-5" for="gridRadios1">Asuransi</label>
			          <input class="form-check-input" type="radio" id="gridRadios1" value="Cash" name="jenis" <?php if($data['jenisberobat_09021281823172']=='Cash')
					{
						echo "checked=checked";
					}?>>
			          <label class="form-check-label" for="gridRadios1">Cash</label>
			        </div>
		     	  </div>
		     	</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="idpasien" class="col-sm-4 col-form-label">Lama Inap</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="inputIdPembayaran" name="hari" value="<?= $data['hari_09021281823172']?>">
			    </div>
			</div>
			<br>
			<center>
			<div class="container">
			  <div class="form-group row" align="center">
			      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" name="simpan" class="btn btn-primary mr-3">Update</button>
			      <button type="reset" name="reset" class="btn btn-primary">Reset</button>
			  </div>
			</div>
			</center>
		 </div>
	</form>
	
	<!-- Content End -->
	<section class="bawah" id="bawah">
				<div class="container">
					<div class="footer">
					<div class="container">
					<hr>
						<div class="row">
							<div class="col-md-12">
							<p align="center">Copyright by Muhammad Sholeh - 09021281823172</p>
							</div>
						</div>
					</div>
				</div>
				<hr>
			</section>
	<script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>	