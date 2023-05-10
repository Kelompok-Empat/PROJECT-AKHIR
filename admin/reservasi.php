<?php
require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginadmin" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit();
}

$id = $_SESSION["id"];


// Mendapatkan nilai sorting dari form jika ada
$sorting = isset($_GET['sorting']) ? $_GET['sorting'] : 'No';

// Mengkonstruksi query SQL berdasarkan nilai sorting
$sqlsorting = "SELECT * FROM reservasi ORDER BY ";

switch ($sorting) {
  case 'Nama':
    $sqlsorting .= "nama ASC";
    break;
  case 'CheckIn':
    $sqlsorting .= "tgl_checkin ASC";
    break;
  case 'CheckOut':
    $sqlsorting .= "tgl_checkout ASC";
    break;
  case 'Ruangan':
    $sqlsorting .= "id_room ASC";
    break;
  default:
    $sqlsorting .= "Nama ASC";
    break;
}

// Melakukan query ke database
$resultsorting = mysqli_query($conn, $sqlsorting);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/reservasi-admin.css">
  <link rel="stylesheet" href="../css/struk.css">
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
      <form action="" method="get">
        <div class="pilih">
          <select name="sorting" id="sorting" style="margin:10px 0;">
            <option value="Nama" <?php if ($sorting == 'Nama')
              echo 'selected'; ?>>Nama</option>
            <option value="CheckIn" <?php if ($sorting == 'CheckIn')
              echo 'selected'; ?>>CheckIn</option>
            <option value="CheckOut" <?php if ($sorting == 'CheckOut')
              echo 'selected'; ?>>CheckOut</option>
            <option value="Ruangan" <?php if ($sorting == 'Ruangan')
              echo 'selected'; ?>>Ruangan</option>
          </select>
        </div>
        <div class="tombol">
          <button type="submit" class="butSorting">Urutkan</button>
        </div>
      </form>
      <table id="reservasiTable">
        <tr>
          <th>Nama</th>
          <th>Tgl Checkin</th>
          <th>Tgl Checkout</th>
          <th>Ruangan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($resultsorting)): ?>
          <tr>
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

  <script src="../js/sorting.js"></script>
</body>

</html>