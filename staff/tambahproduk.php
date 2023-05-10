<?php
require "../koneksi.php";

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginstaff" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit();
}

if (isset($_POST['submit'])) {
    $namaproduk = $_POST['namaproduk'];
    $jumlahproduk = $_POST['jumlahproduk'];

    $insertSql = "INSERT INTO produk (nama_produk, jumlah) VALUES ('$namaproduk', '$jumlahproduk')";

    if (mysqli_query($conn, $insertSql)) {
        echo "<script>alert('Data produk berhasil ditambahkan.');</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat menambahkan data produk: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/produk.css">
    <link rel="stylesheet" href="../css/beranda-justify.css">
    <link rel="stylesheet" href="../css/tambah-justify.css">
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
                <h1>Form Staff</h1><br>
                <form method="post" action="">
                    <input type="text" name="namaproduk" placeholder="Nama Produk" required>
                    <br><br>
                    <input type="text" name="jumlahproduk" placeholder="Jumlah Produk" required>
                    <br><br>
                    <input type="submit" name="submit" value="Tambah">
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
                Support by Arsel, Arind, Chris
            </p>
        </div>
    </footer>


</body>

</html>