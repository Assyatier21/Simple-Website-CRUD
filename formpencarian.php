<?php 
   include 'koneksi.php';
   
   $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5000;
   $page = isset($_GET['page']) ? $_GET['page'] : 1;
   $start = ($page - 1) * $limit;
   $result = $koneksi->query("SELECT * FROM tb_pasien LIMIT $start, $limit");
   $customers = $result->fetch_all(MYSQLI_ASSOC);
   $result1 = $koneksi->query("SELECT count(idpembayaran_09021281823172) AS id FROM tb_pasien");
   $custCount = $result1->fetch_all(MYSQLI_ASSOC);
   $total = $custCount[0]['id'];
   $pages = ceil( $total / $limit );
   $Previous = $page - 1;
   $Next = $page + 1;
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Pencarian Data</title>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
   
   <!-- javascript-->
   <link href="js/sb-admin.js" rel="stylesheet">
   <link href="js/sb-admin.min.js" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <li class="nav-item">
              <a class="nav-link" href="home.php"><h5>Home <span class="sr-only">(current)</span></h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formtampil.php"><h5>Lihat Database</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formbayar.php"><h5>Isi Data</h5></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="formpencarian.php"><h5>Pencarian Data</h5></a>
            </li>
          </ul>
            <a href="logout.php"><button class="btn btn-outline-danger mb-2" type="submit" name="logout">Logout</button></a>
         </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Modal Start -->
      <h4 align="center" class="mt-3"><b>DATABASE TRANSAKSI PEMBAYARAN RUMAH SAKIT HARAPAN KITA</b></h4>
      <div class="container">
      <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" style="color: white;">Pencarian</a>
        <form class="form-inline"  action="" method="GET">
          <input class="form-control mr-sm-2" type="search" name="find"  placeholder="Search by ID, Nama ..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="search" name="cari">Search</button>
        </form>
      </nav>
      <div class="row">
        <div class="col-lg-12">
        <br>
          <div class="table-responsive">
            <table border="1"  align="center" width="1200px" class="table table-striped" id="datatables">
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
                if(isset($_GET['cari']))
                {
                  $pencarian = $_GET['find'];
                  $tampil = "SELECT * FROM tb_pasien WHERE namapasien_09021281823172 LIKE '%$pencarian%' OR idpasien_09021281823172 LIKE '%$pencarian%' OR jeniskamar_09021281823172 LIKE '%$pencarian%' OR jenisberobat_09021281823172 LIKE '%$pencarian%';";
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
              }
                ?>
                </tbody>
            </table>  
              </div>
        <!-- Modal End -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="dataTables/dataTables.min.js"></script>
  
</body>
</html>



