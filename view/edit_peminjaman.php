<?php
include '../config/koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}



if (isset($_POST['edit'])) {
    $id_pinjam = $_POST['id_pinjam'];

    $nama_peminjam = $_POST['nama_peminjam'];
    $judul_buku = $_POST['judul_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $status = $_POST['status'];
    $denda = $_POST['denda'];

    $sql = "UPDATE tb_peminjaman SET nama_peminjam='$nama_peminjam', judul_buku='$judul_buku', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', status='$status', denda='$denda' WHERE id_pinjam='$id_pinjam'";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Ubah User Error");


    if ($query > 0) {
        echo "<script>alert('Data Berhasil Diubah!!!');
        document.location.href = '../peminjaman.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!!!');
        document.location.href = '../peminjaman.php';
        </script>";
    }
}
