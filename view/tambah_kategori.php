<?php
include '../config/koneksi.php';
session_start();

if (isset($_POST['tambah'])) {
    $kategori = $_POST['kategori'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tb_kategori VALUES ('','$kategori', '$status')";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Tambah Kategori Error");

    //header("Location: user.php");

    if ($query > 0) {
        echo "<script>alert('Data Berhasil Ditambah!!!');
        document.location.href = '../kategori.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Ditambah!!!');
        document.location.href = '../kategori.php';
        </script>";
    }
}
