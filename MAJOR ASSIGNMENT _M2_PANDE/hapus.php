<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $query = "DELETE FROM suppliers WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: datadisplay.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: datadisplay.php");
}
?>