<?php

$hostName = "localhost:3307";
$userName   = "root";
$pass       = "";
$db         = "db_pustaka";

$koneksi = mysqli_connect($hostName, $userName, $pass, $db);

if ($koneksi->connect_error) {
    die('Koneksi gagal !!!' . $koneksi->connect_error);
}