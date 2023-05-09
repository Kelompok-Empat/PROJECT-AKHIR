<?php
require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginadmin" && !isset($_SESSION["id"])) {
  header("location:../index.php");
}

$id = $_SESSION["id"];
$sql = "SELECT * FROM reservasi";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/beranda-justify.css">
  <link rel="stylesheet" href="../css/reservasi-admin.css">
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
    <h1>Daftar Reservasi</h1>
    <div class="table-container">
      <table>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Tgl Checkin</th>
          <th>Tgl Checkout</th>
          <th>Ruangan</th>
        </tr>
        <?php $nomor = 1 ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td>
              <?= $nomor ?>
            </td>
            <td>
              <?= $row['nama'] ?>
            </td>
            <td>
              <?= $row['tgl_checkin'] ?>
            </td>
            <td>
              <?= $row['tgl_checkout'] ?>
            </td>
            <th>
              <?= $row['id_room'] ?>
            </th>
          </tr>
          <?php $nomor++ ?>
        <?php endwhile ?>
      </table>
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