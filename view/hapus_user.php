<?php
include '../config/koneksi.php';
session_start();


$sql = "DELETE FROM tb_users WHERE id_users = '" . $_GET['id_users'] . "'";
$query =  mysqli_query($koneksi, $sql) or die("SQL Hapus User Error: " . mysqli_error($koneksi));

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!!!');
        document.location.href = '../user.php';
        </script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!!!');
        document.location.href = '../user.php';
        </script>";
}
