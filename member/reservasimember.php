<?php
require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginuser" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit;
}

if (isset($_GET['submit'])) {
  $id = $_GET['id'];
  $nama = $_GET['name'];
  $checkin = $_GET['checkin'];
  $checkout = $_GET['checkout'];
  $roomtype = $_GET['roomtype'];
  $idroom = $_GET["noroom"];
  if ($roomtype == 'standard') {
    $roomtype = 1;
  } else if ($roomtype == 'deluxe') {
    $roomtype = 2;
  } else {
    $roomtype = 3;
  }

  $sql = "INSERT INTO reservasi (tgl_checkin, tgl_checkout, nama, tipe,id_member,id_room) VALUES ('$checkin', '$checkout','$nama', '$roomtype','$id','$idroom')";

  if (mysqli_query($conn, $sql)) {
    echo "
      <script>
      alert('Reservasi berhasil disimpan');
      </script>
      ";
    header("location:struk.php");
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/reservasi-justify.css">
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
        <h1>Reservasi</h1><br>
        <form method="get" action="">
          <input type="hidden" value="<?= $_SESSION['id'] ?>" name="id">
          <label for="name">Nama</label>
          <input type="text" name="name"><br><br>

          <label for="checkin">Tanggal Check In</label><br>
          <input type="date" name="checkin"><br><br>

          <label for="checkout">Tanggal Check Out</label><br>
          <input type="date" name="checkout"><br><br>

          <label for="roomtype">Tipe Kamar</label><br>
          <select id="roomtype" name="roomtype">
            <option value="">Pilih Tipe</option>
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
            <option value="suite">Suite</option>
          </select>

          <label for="noroom">Nomor Ruangan</label><br>
          <select id="noroom" name="noroom">
            <?php
            $sql = "SELECT * FROM room";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $no_room = $row['no_room'];
              $kapasitas = $row['kapasitas'];
              $tipe = $row['id_tipe'];
              echo "<option value='$no_room' class='$tipe'>$no_room | Kapasitas: $kapasitas</option>";
            }
            ?>
          </select>
          <br><br>
          <input type="submit" name="submit" value="Submit">
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
<script src="../js/reservasi.js"></script>

</html>