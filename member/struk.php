<?php
require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginuser" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit;
}

$id = $_SESSION["id"];

$sql = "SELECT * FROM reservasi WHERE id_member = $id";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>struk</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/reservasi-justify.css">
  <link rel="stylesheet" href="../css/struk.css">
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
    <div class="container">
      <div class="containers">
        <h1>Struk Reservasi</h1>
        <hr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class='struk'>
            <?php
            $idroom = $row['id_room'];
            $sqlroom = "SELECT * FROM room WHERE no_room= $idroom";
            $room = mysqli_query($conn, $sqlroom)->fetch_assoc();
            ?>
            <p class='name'>
              <?= $row['nama'] ?>
            </p>
            Tgl. Check In :
            <?= $row['tgl_checkin'] ?><br><br>
            Tgl. Check Out :
            <?= $row['tgl_checkout'] ?><br><br>
            Ruangan :
            <?= $idroom ?><br><br>
            Harga :
            <?= $room['harga'] ?>
          </div>
          <hr>
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