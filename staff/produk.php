<?php
require "../koneksi.php";

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
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
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Cari...">
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Setting</th>
                </tr>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $i ?>
                        </td>
                        <td>
                            <?php echo $row["nama_produk"] ?>
                        </td>
                        <td>
                            <?php echo $row["jumlah"] ?>
                        </td>
                        <td>ini buat edit</td>
                    </tr>
                    <?php $i++; ?>
                <?php } ?>
            </table>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/livesearch.js"></script>

</html>