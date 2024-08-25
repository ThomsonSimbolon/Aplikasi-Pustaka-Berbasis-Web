<?php
include 'config/koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kategori</title>

    <!-- Custom fonts for this template-->
    <link href="Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="Assets/custom/style.css">

    <!-- Custom styles for this page -->
    <link href="Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-deviantart"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pustaka <sup>Web</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-key"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Data</h6>
                        <a class="collapse-item" href="daftar_buku.php">Daftar Buku</a>
                        <a class="collapse-item" href="peminjaman.php">Peminjaman</a>
                        <a class="collapse-item" href="kategori.php">Kategori</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-book-open"></i>
                    <span>Data Laporan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Laporan</h6>
                        <a class="collapse-item" href="laporan_daftarBuku.php">Laporan Daftar Buku</a>
                        <a class="collapse-item" href="laporan_peminjaman.php">Laporan Peminjaman</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="user.php">
                    <i class="fas fa-user"></i>
                    <span>Data User</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="tentang.php">
                    <i class="fas fa-address-card"></i>
                    <span>Tentang Saya</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="kontak.php">
                    <i class="fas fa-phone-alt"></i>
                    <span>Kontak</span>
                </a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle" src="images/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-end justify-content-end mb-2 mr-0 text-decoration-underline">
                        <p class="mb-0 text-gray-600 text-decoration-underline">Anda masuk sebagai <i class="fas fa-chevron-right text-success"></i> <?php echo $_SESSION['username'] ?></p>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Row -->
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header bg-gradient-success bg-gradient-success d-flex align-items-center justify-content-between">
                                    <h5 class="text-white m-0 font-weight-bold text-underline">Daftar Kategori</h5>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                                        <i class="fas fa-plus"></i> Tambah
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kategoti</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include 'config/koneksi.php';

                                                $sql = "SELECT * FROM tb_kategori";
                                                $query = mysqli_query($koneksi, $sql);
                                                $no = 0;

                                                while ($data = mysqli_fetch_array($query)) {
                                                    $no++;
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $data['kategori'] ?></td>
                                                        <td><?= $data['status'] ?></td>
                                                        <td class="d-flex align-items-center">
                                                            <a href="#" type="button" class="btn-sm btn-custom" data-toggle="modal" data-target="#modalDetail<?php echo $data['id_kategori']; ?>">
                                                                <span class="fas fa-eye text-info"></span>
                                                            </a>
                                                            <a href="#" type="button" class="btn-sm btn-custom" data-toggle="modal" data-target="#modalEdit<?php echo $data['id_kategori']; ?>">
                                                                <span class="fas fa-edit text-warning"></span>
                                                            </a>
                                                            <a href="view/hapus_kategori.php?id_kategori=<?php echo $data['id_kategori'] ?>" class="btn-sm btn-custom">
                                                                <span class="fas fa-trash-alt text-danger"></span>
                                                            </a>


                                                        </td>
                                                    </tr>

                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="modalDetail<?php echo $data['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-gradient-success text-white">
                                                                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-list"></i> Detail Kategori</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <input type="checkbox" id="isbn" class="d-none">
                                                                        <div class="col-sm-4">
                                                                            <h6>
                                                                                Kategori<br>
                                                                                Status
                                                                            </h6>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <h6>
                                                                                : <?= $data['kategori'] ?><br>
                                                                                : <?= $data['status'] ?>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal Detail -->

                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="modalEdit<?php echo $data['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-gradient-success text-white">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="view/edit_kategori.php" method="post">
                                                                        <div class="form-group">
                                                                            <label for="kategori">Kategori</label>
                                                                            <input type="text" name="kategori" value="<?= $data['kategori'] ?>" class="form-control" id="kategori" placeholder="kategori" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="status">Status</label>
                                                                            <input type="text" name="status" value="<?= $data['status'] ?>" class="form-control" id="status" placeholder="status" required>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $data['id_kategori'] ?>">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                                                            <button type="submit" name="edit" id="edit" class="btn btn-primary">Edit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal Edit -->

                                                    <!-- Modal Tambah -->
                                                    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-gradient-success text-white">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="view/tambah_kategori.php" method="post">
                                                                        <div class="form-group">
                                                                            <label for="kategori">Kategori</label>
                                                                            <input type="text" name="kategori" class="form-control" id="kategori" placeholder="kategori" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="status">Status</label>
                                                                            <input type="text" name="status" class="form-control" id="status" placeholder="status" required>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" name="tambah" id="tambah" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal Tambah -->
                                                    <?php } ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; UAS Applied Database 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda siap untuk keluar dari?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah kamu yakin ingin keluar dari sesi!!!</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="Assets/vendor/jquery/jquery.min.js"></script>
        <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="Assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="Assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="Assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="Assets/js/demo/datatables-demo.js"></script>

        <!-- Page level custom scripts -->
        <script src="Assets/js/demo/chart-area-demo.js"></script>
        <script src="Assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>