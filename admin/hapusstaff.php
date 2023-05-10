<?php
require "../koneksi.php";

session_start();

// Cek apakah user sudah login atau belum
if ($_SESSION['status'] != "loginadmin" && !isset($_SESSION["id"])) {
  header("location:../index.php");
  exit();
}

$id = $_GET["id"];

if( $id ){
    $query = "DELETE FROM staff WHERE id_staff = $id";
    mysqli_query($conn, $query);
    echo "<script>
    alert ('Data Berhasil di Hapus');
    document.location.href = 'cekstaff.php';
    </script>";
}

?>