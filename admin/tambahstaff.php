<?php
require "../koneksi.php";

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginadmin" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit();
}

if (isset($_POST["submit"])) {
  // Ambil data dari form
  $nama = $_POST["namastaff"];
  $email = $_POST["emailstaff"];
  $password = $_POST["passwordstaff"];
  $job = $_POST["job"];

  // Query untuk menambahkan data ke dalam tabel staff
  $query = "INSERT INTO staff (nama_staff, email,job, password) VALUES ('$nama', '$email','$job','$password')";

  // Jalankan query
  $result = mysqli_query($conn, $query);

  // Cek apakah data berhasil disimpan
  if ($result) {
    // Redirect ke halaman daftar staff dengan pesan sukses
    header("Location: cekstaff.php");
  } else {
    // Redirect ke halaman daftar staff dengan pesan error
    echo "
    <script>
    alert('gagal menambahkan staff');
    </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Staff</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/beranda-justify.css">
  <link rel="stylesheet" href="../css/reservasi-justify.css">
</head>

<body>

  <nav>
    <div class="logo">
      <a href="berandaadmin.php">
        <img src="../img/1.png" width="20%">
      </a>
    </div>
    <div class="right-links">
      <a href="reservasi.php">Reservasi</a>
      <a href="cekmember.php">Member</a>
      <a href="cekstaff.php">Staff</a>
      <a href="../portal/logout.php">Logout</a>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="containers">
        <h1>Form Staff</h1><br>
        <form method="post" action="">
          <input type="text" name="namastaff" placeholder="Nama" required>
          <br><br>
          <input type="email" name="emailstaff" placeholder="Email" required>
          <br><br>
          <input type="password" name="passwordstaff" placeholder="Password" required>
          <br><br>
          <input type="text" name="job" placeholder="Job Staff" required>
          <br><br>
          <input type="submit" name="submit" value="Tambah">
        </form>
      </div>
    </div>

  </main>
  <footer>
    <div class='container-footer'>

      <p>
        &copy; 2023 Mountain Lodge. All rights reserved.
      </p>
      <p>
        Support by Arsel,Arind,Chris
      </p>
    </div>
  </footer>

</body>

</html>