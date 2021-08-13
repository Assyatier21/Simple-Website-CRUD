<?php
	session_start();
	if(isset($_POST['ButtonLogin']))
	{
		if(empty($_POST['username']) || empty($_POST['password']))
		{
				echo "<script>alert('Isi Username dan Password Sebelum Melanjutkan !');
				location.href='FormLogin.php';</script>";
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			include "koneksi.php";

			$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE password = '$password' AND username = '$username'");
			$rows = mysqli_num_rows($query);

			if($rows == 1)
			{
				$_SESSION['login_user'] = $user;
				header("location:home.php"); 
			}
			else
			{
				echo "<script>alert('Username dan Password Salah!');
				location.href='FormLogin.php';</script>";
			}
			mysql_close($koneksi);
		}
	}
?>