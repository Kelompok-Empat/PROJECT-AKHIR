<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Staff</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <header>
    <div class="logo">
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
        <h1>Update Staff</h1><br>
        <form method="post" action="">
          <input type="text" name="namastaff" placeholder="Nama" required>
          <br><br>
          <input type="email" name="emailstaff" placeholder="Email" required>
          <br><br>
          <input type="password" name="passwordstaff" placeholder="Password" required>
          <br><br>
          <input type="text" name="job" placeholder="Job Staff" required>
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