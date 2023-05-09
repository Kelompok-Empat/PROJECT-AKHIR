<?php

require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginuser" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit;
}

$sql = "SELECT * FROM room";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ruangan</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/ruangan.css">
</head>

<body>

  <nav>
    <div class="logo">
      <a href="berandamember.php">
        <img src="../img/1.png" width="20%">
      </a>
    </div>
    <div class="right-links">
      <a href="tentangkami.php">Tentang Kami</a>
      <a href="ruangan.php">Ruangan</a>
      <a href="reservasimember.php">Reservasi</a>
      <a href="struk.php">Struk</a>
      <a href="../portal/logout.php">Logout</a>
    </div>
  </nav>

  <main>

    <h1>Hotel Room Options</h1>


    <div id="ruangan">
      <div class="">
        <?php while ($data = mysqli_fetch_assoc($query)): ?>
          <div class="room">
            <img src="../img/hotel<?= $data['id_tipe'] ?>.png" alt="Room 1">
            <?php
            if ($data['no_room'] <= 199) {
              $namaRuangan = 'Standard';
            } else if ($data['no_room'] <= 299) {
              $namaRuangan = 'Deluxe';
            } else {
              $namaRuangan = 'Suite';
            }
            ?>
            <h2>
              <?= $data['no_room'] ?> |
              <?= $namaRuangan ?>
            </h2>
            <p class="kapasitas">Kapasitas :
              <?= $data['kapasitas'] ?>
            </p>
            <p class="price">Rp
              <?= $data['harga'] ?> per malam
            </p>
            <p><a href="reservasimember.php">Book Now</a></p>
          </div>
        <?php endwhile ?>
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