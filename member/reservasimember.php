<?php 
require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if($_SESSION['status']!="loginuser" && !isset($_SESSION["id"])){
  header("location:../index.php");
  exit;
}

if(isset($_POST['submit'])) {
  $nama = $_POST['name'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];
  $roomtype = $_POST['roomtype'];
  $id_member = $_POST['id_member'];
  $id_room = $_POST['id_room'];

  $sql = "INSERT INTO reservasi (tgl_checkin, tgl_checkout, id_member, id_room, nama, tipe) VALUES ('$checkin', '$checkout','$id_member','$id_room','$nama', '$roomtype')";

  if(mysqli_query($conn, $sql)) {
      echo "
      <script>
      alert('Reservasi berhasil disimpan')
      </script>
      ";
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
</head>

<body>

  <header>
    <div class="logo">
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
    <div class="container">
      <div class="containers">
        <h1>Reservasi</h1><br>
        <form method="post" action="">
          <label for="id_member">Id Member</label><br>
          <input type="number" name="id_member"><br><br>

          <label for="id_room">Id Room</label><br>
          <input type="number" name="id_room"><br><br>

          <label for="name">Nama</label>
          <input type="text" name="name"><br><br>

          <label for="checkin">Tanggal Check In</label><br>
          <input type="date" name="checkin"><br><br>

          <label for="checkout">Tanggal Check Out</label><br>
          <input type="date" name="checkout"><br><br>

          <label for="roomtype">Tipe Kamar</label><br>
          <select id="roomtype" name="roomtype">
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
            <option value="suite">Suite</option>
          </select>
          <br><br>

          <input type="submit" name="submit" value="Submit">
        </form>
      </div>
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