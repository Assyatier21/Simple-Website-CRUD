<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
	
	<title>Form Login</title>
	<style>
		body
		{
			background-image: url("img/2.png");
		}
		.container{
			width: 1000px;
			height: 400px;
			margin-top: 80px; 
			align-content: center;
			background-color: white;
			border-radius: 20px;
			border: 2px solid rgb(136,136,136, 0.5) ;
			}
		img
		{
			width: 500px;

		}
		img
		{
			margin-left: -50px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
<br>
<br>
<div class="container" style=" width:600px; height: 50px;">
<div class="row justify-content-center" style="background-color: white; border-radius: 20px;">
	<table class="mt-2">
		<tr>
			<td style="color: rgb(0, 179, 89)">
				<b><h5>SELAMAT DATANG DI WEBSITE DATABASE HARAPAN KITA</h5></b>
			</td>
		</tr>
	</table>
</div>
</div>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-lg-8">
			<div class="row">
			<div class="col-lg-6 mt-4 pt-5">
				<img src="img/3.png" class="img-fluid">
			</div>
			<div class="col-lg-6 pt-5">
				<div class="card">
				<div class="card-header">
				<div class="row justify-content-md-center">
					<h6>LOGIN DATABASE RUMAH SAKIT</h6>
				</div>
				<table border="1" align="center" width="500">
					<form action="login.php" method="POST">
					  <div class="form-group" action="login.php" method="POST">
					    <label for="username">Username</label>
					    <input type="text" name="username" class="form-control" id="" aria-describedby="emailHelp" placeholder="Username">
					    <small id="" class="form-text text-muted">Only admin can access this site.</small>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" id="" name="password" placeholder="Password">
					    <small id="" class="form-text text-muted">Never share your password with anyone else.</small>
					  </div>
					  </div>
					  <button type="submit" class="btn btn-primary mr-3" name="ButtonLogin">Login</button>
					  <button type="submit" class="btn btn-primary" name="reset">Reset</button>
					</form>	
				</table>
				</div>
					
					<!-- <form action="login.php" method="POST">
						<tr>
							<td colspan="2" bgcolor="Yellow" align="center" height="25"><b>FORM LOGIN DATABASE RUMAH SAKIT HARAPAN KITA</b></td>
						</tr>
						<tr>
							<td colspan="" height="20">&emsp;Username</td>
							<td height="20"><input type="text" name="username"></td>
						</tr>
						<tr class="new">
							<td colspan="" height="20">&emsp;Password</td>
							<td height="20"><input type="password" name="password"></td>
						</tr>
						<tr>
							<td colspan="2" align="center" height="30">
			 					<button name="ButtonLogin" type="submit">Login</button>
								<button name="reset" type="reset">Reset</button>
			 				</td>
						</tr>
					</form> -->
				</div>
			</div>
		</div>		
	</div>
</div>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>