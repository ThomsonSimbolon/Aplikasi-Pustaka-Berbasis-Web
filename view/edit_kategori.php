<?php
include '../config/koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}



if (isset($_POST['edit'])) {
    $id_kategori = $_POST['id_kategori'];

    $kategori = $_POST['kategori'];
    $status = $_POST['status'];

    $sql = "UPDATE tb_kategori SET kategori='$kategori', status='$status' WHERE id_kategori='$id_kategori'";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Ubah Kategori Error");


    if ($query > 0) {
        echo "<script>alert('Data Berhasil Diubah!!!');
        document.location.href = '../kategori.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!!!');
        document.location.href = '../kategori.php';
        </script>";
    }
}
