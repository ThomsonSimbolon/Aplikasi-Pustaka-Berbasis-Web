<?php
include '../config/koneksi.php';
session_start();

$sql = "DELETE FROM tb_buku WHERE isbn = '" . $_GET['isbn'] . "'";
$query =  mysqli_query($koneksi, $sql) or die("SQL Hapus Buku Error: " . mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!!!');
        document.location.href = '../daftar_buku.php';
        </script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!!!');
        document.location.href = '../daftar_buku.php';
        </script>";
}
