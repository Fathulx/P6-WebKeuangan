<?php
include "../conn.php";

if (isset($_POST['update'])) {

    $id = $_GET['id'];

    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];

    mysqli_query(
        $conn,
        "UPDATE pengeluaran SET
        tanggal='$tanggal',
        keterangan='$keterangan',
        jumlah='$jumlah'
        WHERE id='$id'"
    );

    header("Location: pengeluaran.php");
    exit;
}
?>