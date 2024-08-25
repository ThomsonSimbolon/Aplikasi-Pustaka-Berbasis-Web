<?php
include '../config/koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}



if (isset($_POST['edit'])) {
    $isbn = $_POST['isbn'];

    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $status = $_POST['status'];

    $sql = "UPDATE tb_buku SET judul_buku='$judul_buku', kategori='$kategori', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', status='$status' WHERE isbn='$isbn'";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Ubah Buku Error");


    if ($query > 0) {
        echo "<script>alert('Data Berhasil Diubah!!!');
        document.location.href = '../daftar_buku.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!!!');
        document.location.href = '../daftar_buku.php';
        </script>";
    }
}
