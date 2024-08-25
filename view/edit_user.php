<?php
include '../config/koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}



if (isset($_POST['edit'])) {
    $id_users = $_POST['id_users'];

    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap'];
    $level = $_POST['level'];
    $ket = $_POST['keterangan'];

    $sql = "UPDATE tb_users SET username='$username', nama_lengkap='$nama', level='$level', keterangan='$ket' WHERE id_users='$id_users'";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Ubah User Error");


    if ($query > 0) {
        echo "<script>alert('Data Berhasil Diubah!!!');
        document.location.href = '../user.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!!!');
        document.location.href = '../user.php';
        </script>";
    }
}
