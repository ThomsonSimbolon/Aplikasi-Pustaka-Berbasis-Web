<?php
include '../config/koneksi.php';
session_start();

if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama_lengkap'];
    $level = $_POST['level'];
    $ket = $_POST['keterangan'];

    $sql = "INSERT INTO tb_users VALUES ('','$username','$password','$nama','$level', '$ket')";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Tambah User Error");

    //header("Location: user.php");

    if ($query > 0) {
        echo "<script>alert('Data Berhasil Ditambah!!!');
        document.location.href = '../user.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Ditambah!!!');
        document.location.href = '../user.php';
        </script>";
    }
}
