<?php

session_start();
require 'koneksi.php';


if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	// Validasi inputan
	if ($password !== $confirm_password) {
		echo "
		<script>alert('Password tidak sesuai')</script>
		";
		exit();
	}

	$sqlemail = "SELECT * FROM member WHERE email = '$email'";
	$resultemail = mysqli_query($conn, $sqlemail);

	if (mysqli_num_rows($resultemail) > 0) {
		header("Location: registrasi.php");
		$_SESSION["regis"] = 'failed';
		exit();
	}

	// Query untuk menambahkan data user baru ke database
	$sql = "INSERT INTO member (nama, email, password) VALUES ('$username', '$email', '$password')";
	$result = mysqli_query($conn, $sql);

	// Cek apakah query berhasil dieksekusi
	if ($result) {
		$_SESSION["regis"] = 'success';
		header("Location:portal/loginmember.php");
	} else {
		echo "
		<script>alert('Registrasi Gagal!')</script>
		";
	}

}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Halaman Registrasi</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			height: 100vh;
		}

		.containers {
			display: flex;
			height: 100%;
		}

		.container.mt-5 {
			margin: 1px auto;
			display: flex;
		}

		.row.justify-content-center {
			margin: auto;
			flex: 1;
		}

		.card {
			padding: 10px;
		}

		.card:nth-child(1) {
			background-color: #2E5F7D;
			color: #fff;
		}

		.card:nth-child(2) {
			background-color: #8CB27F;
			color: #fff;
		}

		.card:nth-child(3) {
			background-color: #EAE7EE;
			color: #000;
		}

		.pwd {
			padding-bottom: 30px;
		}

		.bg-img {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: -1;
			background-image: url("img/window.jpg");
			background-size: cover;
		}
	</style>
</head>

<body>
	<div class="containers">

		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h4 class="text-center">Registrasi</h4>
						</div>
						<div class="card-body">
							<form method="post" action="">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="confirm_password">Konfirmasi Password</label>
									<input type="password" name="confirm_password" class="form-control" required>
								</div>
								<?php
								if (isset($_SESSION["regis"])) {
									if ($_SESSION["regis"] == 'failed') {
										echo "<p>Email telah digunakan</p>";
									}
								} ?>
								<button type="submit" class="btn btn-primary btn-block"
									style="margin:40px 0;">Daftar</button>
							</form>
							<div class="text-center mt-3">
								<div>Sudah punya akun?</div>
								<a href="portal/loginmember.php">Login disini</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-img"></div>

	<!-- Load Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>