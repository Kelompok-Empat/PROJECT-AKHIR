<?php

$conn = mysqli_connect("localhost", "root", "", "hotel");
if( !$conn ){
    die("Gagal Terhubung :". mysqli_connect_error());
}

?>