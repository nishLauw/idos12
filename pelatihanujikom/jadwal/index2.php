<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] != 'login') {
    header('location :index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Ujikom Muh. Firdaus</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">


            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li> <a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="../matkul">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Mata Kuliah
                        </a>
                        <a class="nav-link" href="../dosen">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Dosen
                        </a>
                        <a class="nav-link" href="../jadwal">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Jadwal
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Mahasiswa
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Semester
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            KRS
                        </a>

                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as: <?php echo $_SESSION['username'] ?> </div>

                        </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Jadwal</h1>
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Tambah Jadwal
                    </button>
                    <a href="index2.php" class="btn btn-danger"> Refresh </a>
                    <br>
                    <br>
                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Dosen</th>
                                        <th>Nama Matkul</th>
                                        <th>Ruang</th>
                                        <th>waktu</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>

                                <tbody>
                                    <?php
                                    $i = 1;
                                    $data_jadwal = $data->get_jadwal();
                                    while ($record = $data_jadwal->fetch_array()) { ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $record['nama_dosen'] ?></td>
                                            <td><?php echo $record['nama_matkul'] ?></td>
                                            <td><?php echo $record['ruang'] ?></td>
                                            <td><?php echo $record['waktu'] ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $record['id'] ?>">Edit</a>
                                                <a href="hapus.php?id=<?php echo $record['id'] ?>">Hapus</a>
                                            </td>
                                            </td>
                                        </tr>
                                        </tr>
                                        </tr>

                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post">
                <!-- Modal body -->
                <div class="modal-body">
                    <select name="kd_dosen" class="form-control">
                        <?php
                        $data2 = $data->get_dosen();
                        while ($record = $data2->fetch_array()) {
                            echo '<option value="' . $record['kd_dosen'] . '">' . $record['nama'] . '</option>';
                        }
                        ?>
                    </select>
                    <br>
                    <select name="kd_matkul" class="form-control">
                        <?php
                        $data3 = $data->get_matkul();
                        while ($record = $data3->fetch_array()) {
                            echo '<option value="' . $record['kd_matkul'] . '">' . $record['nama'] . '</option>';
                        }
                        ?>
                    </select>
                    <br>
                    <input type="text" name="ruang" placeholder="Ruang" class="form-control" required>
                    <br>
                    <input type="text" name="waktu" placeholder="Waktu" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary"> Tambah</button>
                    <br>
                    <br>
                    <div class="alert alert-warning">Harap Mengisi Data Yang Sesuai</div>
            </form>
            <?php

            if (isset($_POST['ruang'])) {
                $kd_dosen = $_POST['kd_dosen'];
                $kd_matkul = $_POST['kd_matkul'];
                $ruang = $_POST['ruang'];
                $waktu = $_POST['waktu'];

                if ($data->add_jadwal($kd_dosen, $kd_matkul, $ruang, $waktu)) {
                    header('location:index.php');
                }
            }

            ?>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

    </div>
</div>
</div>

</html>