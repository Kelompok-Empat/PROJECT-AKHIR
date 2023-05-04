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
          <form method="post" action="struk.php">
              <label for="name">Nama</label>
              <input type="text"><br><br>
              <label for="checkin">Tanggal Check In</label><br>
              <input type="date"><br><br>
              <label for="checkout">Tanggal Check Out</label><br>
              <input type="date"><br><br>
              <label for="roomtype">Tipe Kamar</label><br>
              <select id="roomtype" name="roomtype">
                <option value="standard">Standard</option>
                <option value="deluxe">Deluxe</option>
                <option value="suite">Suite</option>
              </select>
              <br><br>
              <input type="submit" value="Submit">
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