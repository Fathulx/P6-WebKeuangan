<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "dbkeuangan"
);

if (!$conn) {
    die("Koneksi gagal : " . mysqli_connect_error());
}
?>