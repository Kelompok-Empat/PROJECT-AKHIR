<?php

require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginuser" && !isset($_SESSION["id"])) {
  header("location:../index.php");
}

$id = $_SESSION["id"];
$sql = "SELECT * FROM member WHERE id_member = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>beranda</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/beranda-justify.css">
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
    <div class="greeting">
      <h2>Hi! Selamat Datang
        <?= $row['nama'] ?>!
      </h2>
      <P>Have a good day!</P>
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