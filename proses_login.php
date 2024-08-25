<?php

include 'config/koneksi.php';
session_start();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama_lengkap'];
    $level = $_POST['level'];
    $ket = $_POST['keterangan'];

    $sql = "SELECT * FROM tb_users WHERE username='$username' AND password='$password'";
    $query =  mysqli_query($koneksi, $sql);
    $cek =  mysqli_num_rows($query);
    if ($cek > 0) {
        $data =  mysqli_fetch_array($query);


        if ($data['level'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";

            header("Location: index_admin.php");
        } else if ($data['level'] == "member") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "member";

            header("Location: index.php");
        } else {
            header("Location: login.php?pesan=gagal");
        }
    } else {
        echo "<script> window.location.assign('index.php?error=yes');</script>";
    }
}
