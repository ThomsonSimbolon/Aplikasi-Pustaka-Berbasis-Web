<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Login</title>

    <!-- Custom fonts for this template-->
    <link href="Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="Assets/custom/style.css">

</head>

<body class="bg-gradient-white d-flex align-items-center justify-content-center" style="height: 100vh;">
    <?php include 'config/koneksi.php';
    session_start();
    ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                                    </div>
                                    <form class="user" action="proses_login.php" method="post">
                                        <div class="form-group">
                                            <input type="username" name="username"
                                                class="form-control form-control-user" id="exampleInputUser"
                                                aria-describedby="userHelp" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password" required>
                                        </div>
                                        <input type="hidden" name="nama_lengkap">
                                        <input type="hidden" name="level">
                                        <input type="hidden" name="keterangan">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Tampilkan
                                                    password</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="login"
                                            class="btn shadow btn-login btn-block text-white z-1000">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a type="button" class="small" href="#" data-toggle="modal"
                                            data-target="#modalRegis">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block login-form border-left bg-gradient-light">
                                <img src="images/logos.png" width="100%" height="450px" alt="Thom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalRegis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-gradient-success text-white">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i> Buat Akun!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="user" action="proses_registrasi.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" name="username" class="form-control form-control-user"
                                            id="username" placeholder="Username" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" name="nama_lengkap" class="form-control form-control-user"
                                            id="nama_lengkap" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="keterangan" class="form-control form-control-user"
                                            id="keterangan" placeholder="Keterangan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <select name="level" id="level" class="form-control" required>
                                            <option value=" #" default>-- Pilih --</option>
                                            <option value="admin">Admin</option>
                                            <option value="member">Member</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" name="daftar" id="daftar"
                                        class="btn btn-primary">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
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

    <!-- Animation Snowflakes-->
    <script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>

    <script>
    new Snowflakes();
    </script>

    <script src="Assets/custom/main.js"></script>

</body>

</html>