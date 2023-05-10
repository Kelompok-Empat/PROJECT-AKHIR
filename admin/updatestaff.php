<?php

require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginadmin" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit();
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Query untuk mengambil data dari database berdasarkan ID
  $sql = "SELECT * FROM staff WHERE id_staff = $id";
  $result = mysqli_query($conn, $sql);

  // Periksa apakah data ditemukan
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Mendapatkan nilai dari database
    $nama = $row['nama_staff'];
    $email = $row['email'];
    $password = $row['password'];
    $job = $row['job'];

    // Proses pembaruan data jika tombol "update" diklik
    if (isset($_POST['submit'])) {
      $newNama = $_POST['namastaff'];
      $newEmail = $_POST['emailstaff'];
      $newPassword = $_POST['passwordstaff'];
      $newJob = $_POST['job'];

      // Query untuk mengupdate data ke database
      $updateSql = "UPDATE staff SET nama_staff = '$newNama', email = '$newEmail', password = '$newPassword', job = '$newJob' WHERE id_staff = $id";
      if (mysqli_query($conn, $updateSql)) {
        $updateMessage = "<p class='success' style='color: #55725c; margin-top:10px; font-size:12px;'>Data berhasil diupdate</p>";
      } else {
        $updateMessage = "<p class='success' style='color: red; margin-top:10px; font-size:12px;'>Terjadi kesalahan saat mengupdate data: " . mysqli_error($conn) . "</p>";
      }
    }
  } else {
    // Data tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan Anda
    echo "Data tidak ditemukan.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Staff</title>
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
        <h1>Update Staff</h1><br>
        <form method="post" action="">
          <input type="text" name="namastaff" placeholder="Nama" value="<?php echo isset($nama) ? $nama : ''; ?>"
            required>
          <br><br>
          <input type="email" name="emailstaff" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>"
            required>
          <br><br>
          <input type="password" name="passwordstaff" placeholder="Password"
            value="<?php echo isset($password) ? $password : ''; ?>" required>
          <br><br>
          <input type="text" name="job" placeholder="Job Staff" value="<?php echo isset($job) ? $job : ''; ?>" required>
          <br><br>
          <input type="submit" name="submit" value="Update">
        </form>
        <?php if (isset($updateMessage)) {
          echo $updateMessage;
        } ?>
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