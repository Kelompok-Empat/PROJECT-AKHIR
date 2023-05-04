<?php
require "koneksi.php";

$query = "SELECT * FROM staff";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Staff</title>
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
<div class="search-container">
		<input type="text" id="search-input" placeholder="Cari...">
	</div>
    <div class="table-container">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Job</th>
                <th>Setting</th>
            </tr>
            <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["nama_staff"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["job"] ?></td>
                <td>ini buat edit</td>
            </tr>
            <?php $i++; ?>
            <?php } ?>
            </table>
        </div>
    <div class="tambah">
        <p><a href="tambahstaff.php">Tambah</a></p>
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