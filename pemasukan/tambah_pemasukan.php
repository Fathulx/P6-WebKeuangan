<?php
include "../conn.php";

if (isset($_POST['simpan'])) {

    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];

    mysqli_query(
        $conn,
        "INSERT INTO pemasukan
        (tanggal,keterangan,jumlah)
        VALUES
        ('$tanggal','$keterangan','$jumlah')"
    );

    header("Location: pemasukan.php");
    exit;
}
?>