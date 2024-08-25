<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak Data Peminjaman</title>

    <!-- Custom fonts for this template-->
    <link href="../Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="../Assets/custom/style.css">

    <!-- Custom styles for this page -->
    <link href="../Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body onload="print()">

    <!--Menampilkan data detail arsip-->
    <?php
    include '../config/koneksi.php';
    $sql = "SELECT * FROM tb_peminjaman WHERE id_pinjam='" . $_GET['id_pinjam'] . "'";
    //proses query ke database
    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
    //Merubaha data hasil query kedalam bentuk array
    $data = mysqli_fetch_array($query);
    ?>

    <div class="container mt-4">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel-->
                <div class="text-center">
                    <div class="text-header">
                        <h2>Laporan Daftar Peminjaman</h2>
                        <h4>Jl.Yos Sudarso KM.8 Rumbai,Pekanbaru</h4>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Nama Peminjam</td>
                                    <td><?= $data['nama_peminjam'] ?></td>
                                </tr>
                                <tr>
                                    <td>Judul Buku</td>
                                    <td><?= $data['judul_buku'] ?></td>
                                <tr>
                                    <td>Tanggal Pinjam</td>
                                    <td><?= $data['tgl_pinjam'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Kembali</td>
                                    <td><?= $data['tgl_kembali'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?= $data['status'] ?></td>
                                </tr>
                                <tr>
                                    <td>Denda</td>
                                    <td><?= $data['denda'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Rumbai, Pekanbaru <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ketua Program Studi<strong></u><br>
                                        +62 82231347344
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="../Assets/vendor/jquery/jquery.min.js"></script>
        <script src="../Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../Assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../Assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../Assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../Assets/js/demo/datatables-demo.js"></script>

        <!-- Page level custom scripts -->
        <script src="../Assets/js/demo/chart-area-demo.js"></script>
        <script src="../Assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>