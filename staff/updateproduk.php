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
          <input type="text" name="namaproduk" placeholder="Nama Produk" required>
          <br><br>
          <input type="number" name="jumlah" placeholder="Jumlah" required>
          <br><br>
          <input type="submit" name="submit" value="update">
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

</html>