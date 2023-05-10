<?php 

require '../koneksi.php';

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginstaff" && !isset($_SESSION["id"])) {
  header("location:../index.php");
}

$id = $_GET["id"];
$sql = "SELECT * FROM produk WHERE id_produk = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Produk</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/reservasi-justify.css">
  <link rel="stylesheet" href="../css/beranda-justify.css">
</head>

<body>

  <nav>
    <div class="logo">
      <a href="berandastaff.php">
        <img src="../img/1.png" width="20%">
      </a>
    </div>
    <div class="right-links">
      <a href="produk.php">Cek Produk</a>
      <a href="../portal/logout.php">Logout</a>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="containers">
        <h1>Update Produk</h1><br>
        <form method="post" action="">
          <input type="text" name="namaproduk" value="<?=$row['nama_produk']?>" readonly class='produk-name'>
          <br><br>
          <input type="number" name="jumlah" placeholder="Jumlah" required>
          <br><br>
          <div class="box-button">
            <input type="submit" name="submit" value="Update" class="update">
            <a href="produk.php" class="kembali">kembali</a>
          </div>
        </form>
        <?php 
        if (isset($_POST['submit'])) {
          $namaproduk = $_POST['namaproduk'];
          $jumlah = $_POST['jumlah'];
        
          $sqlupdate = "UPDATE produk SET jumlah = $jumlah WHERE nama_produk = '$namaproduk'";
          mysqli_query($conn, $sqlupdate);
          echo "<p class='success' style='color: #55725c; margin-top:10px; font-size:12px;'>Data berhasil diupdate</p>";
        }
        ?>
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