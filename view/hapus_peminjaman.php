<?php
include '../config/koneksi.php';
session_start();

$sql = "DELETE FROM tb_peminjaman WHERE id_pinjam = '" . $_GET['id_pinjam'] . "'";
$query =  mysqli_query($koneksi, $sql) or die("SQL Hapus Peminjaman Error: " . mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!!!');
        document.location.href = '../peminjaman.php';
        </script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!!!');
        document.location.href = '../peminjaman.php';
        </script>";
}
