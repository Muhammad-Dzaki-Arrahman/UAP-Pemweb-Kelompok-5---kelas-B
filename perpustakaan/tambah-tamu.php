<?php 
    include 'koneksi.php';

    if(isset($_POST["submit"]))
    {
        $namalengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $notelepon = $_POST['no_telepon'];

        $jeniskelamin = $_POST['jenis_kelamin'];
        mysqli_query($conn,"INSERT INTO tamu VALUES('','$namalengkap','$alamat', '$jeniskelamin', '$notelepon')");
        header("location:tamu.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/custom.css">
    <title>Tambah Tamu</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi-house fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="buku.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi-book fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="petugas.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="bi-person-check fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="tamu.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                <i class="bi-people fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="transaksi.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                <i class="bi-journal-text fs-1"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <!-- content -->
                <h2>Tambah Tamu</h2>
                <form action="" method="post" class="pt-5 form-tambah-buku">
                    <div class="mb-3 row">
                        <label for="nama lengkap" class="col-sm-1 col-form-label">nama lengkap</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="nama lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-1 col-form-label">alamat</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis kelamin" class="col-sm-1 col-form-label">jenis kelamin</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jenis kelamin" name="jenis_kelamin">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no telepon" class="col-sm-1 col-form-label">no telepon</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="no telepon" name="no_telepon">
                        </div>
                    </div>
                    <div class="mb-3 row pt-2">
                        <div class="col-sm-2">
                            <button type="submit" name="submit" class="btn btn-primary">Tambah Tamu</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>