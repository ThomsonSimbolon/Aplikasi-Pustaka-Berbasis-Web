<?php
include '../config/koneksi.php';
session_start();

$sql = "DELETE FROM tb_kategori WHERE id_kategori = '" . $_GET['id_kategori'] . "'";
$query =  mysqli_query($koneksi, $sql) or die("SQL Hapus Kategori Error: " . mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!!!');
        document.location.href = '../kategori.php';
        </script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!!!');
        document.location.href = '../kategori.php';
        </script>";
}
