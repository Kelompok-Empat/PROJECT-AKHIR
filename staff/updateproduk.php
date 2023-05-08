<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Produk</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <header>
    <div class="logo">
      <a href="berandastaff.php"><img src="../img/1.png" width="20%"></a>
    </div>
  </header>

  <nav style="text-align: right;">

        <a href="produk.php">Cek Produk</a>
        <a href="../portal/logout.php">Logout</a>
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
    <p>
      2023 Copyright ANCF
    </p>
    <P>
      Support by TUPRAK
    </P>
  </footer>

</body>

</html>