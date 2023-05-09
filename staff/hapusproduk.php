<?php
require "../koneksi.php";
$id = $_GET["id"];

if( $id ){
    $query = "DELETE FROM produk WHERE id_produk = $id";
    mysqli_query($conn, $query);
    echo "<script>
    alert ('Data Berhasil di Hapus');
    document.location.href = 'produk.php';
    </script>";
}
?>