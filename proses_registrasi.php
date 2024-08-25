<?php
include 'config/koneksi.php';
session_start();

if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama_lengkap'];
    $level = $_POST['level'];
    $ket = $_POST['keterangan'];

    $sql = "INSERT INTO tb_users VALUES ('','$username','$password','$nama','$level', '$ket')";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Daftar Akun  Error");



    if ($query > 0) {
        echo "<script>alert('Data Berhasil Didaftar!!!');
        document.location.href = './login.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Didaftar!!!');
        document.location.href = './login.php';
        </script>";
    }
}
