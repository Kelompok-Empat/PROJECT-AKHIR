<?php 

require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if($_SESSION['status']!="loginuser" && !isset($_SESSION["id"])){
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

<header>
  <div class = "logo">
    <a href="berandamember.php"><img src="../img/1.png" width="20%"></a>
  </div>
</header>

<nav style="text-align: right;">
        
        <a href="tentangkami.php">Tentang Kami</a>
        <a href="ruangan.php">Ruangan</a>
        <a href="reservasimember.php">Reservasi</a>
        <a href="../portal/logout.php">Logout</a>
</nav>
<main>

  <h1>Hotel Room Options</h1>


  <div id = "ruangan">
    <?php while($data = mysqli_fetch_assoc($query)):?>
    <div class="room">
      <img src="../img/hotel<?= $data['id_tipe'] ?>.png" alt="Room 1">
      <?php 
      if ($data['no_room']<=199){
        $namaRuangan = 'Standard';
      } else if ($data['no_room']<=299){
        $namaRuangan = 'Deluxe';
      } else {
        $namaRuangan = 'Suite';
      }
      ?>
      <h2><?= $data['no_room'] ?> | <?= $namaRuangan ?></h2>
      <p class="price">Kapasitas : <?= $data['kapasitas'] ?></p>
      <p class="price">Rp <?= $data['harga'] ?> per malam</p>
      <p><a href="reservasimember.php">Book Now</a></p>
    </div>
    <?php endwhile?>

    <!-- <div class="room">
      <img src="../img/hotel2.png" alt="Room 2">
      <h2>Standard Room</h2>
      <p class="price">$100 per night</p>
      <p><a href="reservasimember.php">Book Now</a></p>
    </div>

    <div class="room">
      <img src="../img/hotel4.png" alt="Room 3">
      <h2>Suite Room</h2>
      <p class="price">$500 per night</p>
      <p><a href="reservasimember.php">Book Now</a></p>
    </div> -->
  </div>

</main>
<footer>
        <p>
           2023 Copyright ANCF
        </p>
        <P>
            Support by TUPRAK
        </P>
</footer>

</body>
</html>