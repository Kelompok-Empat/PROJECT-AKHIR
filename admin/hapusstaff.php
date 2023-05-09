<?php
require "../koneksi.php";
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