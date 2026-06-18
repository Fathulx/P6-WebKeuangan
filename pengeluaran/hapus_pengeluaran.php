<?php
include "../conn.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    mysqli_query(
        $conn,
        "DELETE FROM pengeluaran WHERE id='$id'"
    );

    header("Location: pengeluaran.php");
    exit;
}
?>