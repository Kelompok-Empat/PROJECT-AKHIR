<?php 

session_start();

// Cek apakah user sudah login atau belum
if($_SESSION['status']!="loginuser" && !isset($_SESSION["id"])){
  header("location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
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
  <div  class="greeting">
      <h2>Hi! Selamat Datang Member!</h2>
      <P>Have a good day!</P>
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