<?php 
require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if($_SESSION['status']!="loginadmin" && !isset($_SESSION["id"])){
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
</head>
<body>
  
<header>
  <div class = "logo">
    <a href="berandaadmin.php"><img src="../img/1.png" width="20%"></a>
  </div>
</header>

<nav style="text-align: right;">
        
        <a href="reservasi.php">Reservasi</a>
        <a href="cekmember.php">Member</a>
        <a href="cekstaff.php">Staff</a>
        <a href="../portal/logout.php">Logout</a>
</nav>

<main>
    <div class="table-container">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tgl Checkin</th>
                <th>Tgl Checkout</th>
                <th>Ruangan</th>
            </tr>
            <?php $nomor = 1?>
            <?php while ($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['tgl_checkin'] ?></td>
                <td><?= $row['tgl_checkout'] ?></td>
                <th><?= $row['id_room'] ?></th>
            </tr>
            <?php $nomor++?>
            <?php endwhile?>
</table>
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