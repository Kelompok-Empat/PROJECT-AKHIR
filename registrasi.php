<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Registrasi</h4>
					</div>
					<div class="card-body">
						<form method="post" action="proses_registrasi.php">
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
							<button type="submit" class="btn btn-primary btn-block">Daftar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Load Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
