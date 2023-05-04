<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
    <link rel="stylesheet" href="style.css">
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
<div class="container">
      <div class="containers">
        <h1>Form Staff</h1><br>
          <form method="post" action="pesan.php" action="staff.php">
              <input type="text" for="nama" id="nama" placeholder="Name" name="nama" required><br><br>
              <input type="text" for="email" id="email" placeholder="Email" name="email" required><br><br>
              <input type="password" for="pass" id="pass" placeholder="Password" name="password" required><br><br>
              <input type="submit" value="Tambah" id="tambah">
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