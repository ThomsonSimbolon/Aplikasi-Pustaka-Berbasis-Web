<?php
include '../config/koneksi.php';
session_start();

if (isset($_POST['tambah'])) {
    $nama_peminjam = $_POST['nama_peminjam'];
    $judul_buku = $_POST['judul_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $status = $_POST['status'];
    $denda = $_POST['denda'];

    $sql = "INSERT INTO tb_peminjaman VALUES ('','$nama_peminjam','$judul_buku','$tgl_pinjam','$tgl_kembali', '$status', '$denda')";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Tambah Peminjaman Error");

    //header("Location: user.php");

    if ($query > 0) {
        echo "<script>alert('Data Berhasil Ditambah!!!');
        document.location.href = '../peminjaman.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Ditambah!!!');
        document.location.href = '../peminjaman.php';
        </script>";
    }
}
