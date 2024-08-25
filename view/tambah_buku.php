<?php
include '../config/koneksi.php';
session_start();

if (isset($_POST['tambah'])) {
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tb_buku VALUES ('','$judul_buku','$kategori','$penulis','$penerbit', '$tahun_terbit', '$status')";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Tambah Buku Error");

    //header("Location: user.php");

    if ($query > 0) {
        echo "<script>alert('Data Berhasil Ditambah!!!');
        document.location.href = '../daftar_buku.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Ditambah!!!');
        document.location.href = '../daftar_buku.php';
        </script>";
    }
}
