<?php
    include('koneksi.php')
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
    <title>Dashboard</title>
    <style type="text/css">
        body {
            background-color: #dddddd;
        }
        .card-1 {
            background-color: #22a6b3;
            color: whitesmoke !important;
        }
        .card-2 {
            background-color: #eb4d4b;
            color: whitesmoke !important;
        }
        .card-3 {
            background-color: #f0932b;
            color: whitesmoke !important;
        }
        .card-4 {
            background-color: #e056fd;
            color: whitesmoke !important;
        }
    </style>
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
                <h2>Dashboard</h2>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col">
                        <?php
                        $raw_data = mysqli_query($conn, "SELECT COUNT('id_Buku') AS 'count' FROM buku");
                        $data = mysqli_fetch_assoc($raw_data);
                        ?>
                        <div class="card card-1" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Buku</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jumlah Buku</h6>
                            <p class="card-text fs-1"><?php echo $data['count'] ?></p>
                          </div>
                        </div>
                    </div>
                    <div class="col">
                        <?php
                        $raw_data = mysqli_query($conn, "SELECT COUNT('id_Petugas') AS 'count' FROM petugas");
                        $data = mysqli_fetch_assoc($raw_data);
                        ?>
                        <div class="card card-2" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Petugas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jumlah Petugas</h6>
                            <p class="card-text fs-1"><?php echo $data['count'] ?></p>
                          </div>
                        </div>
                    </div>
                    <div class="col">
                         <?php
                        $raw_data = mysqli_query($conn, "SELECT COUNT('id_Tamu') AS 'count' FROM tamu");
                        $data = mysqli_fetch_assoc($raw_data);
                        ?>
                        <div class="card card-3" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Tamu</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jumlah Tamu</h6>
                            <p class="card-text fs-1"><?php echo $data['count'] ?></p>
                          </div>
                        </div>
                    </div>
                    <div class="col">
                        <?php
                        $raw_data = mysqli_query($conn, "SELECT COUNT('id_Transaksi') AS 'count' FROM transaksi");
                        $data = mysqli_fetch_assoc($raw_data);
                        ?>
                        <div class="card card-4" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Transaksi</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jumlah Transaksi</h6>
                            <p class="card-text fs-1"><?php echo $data['count'] ?></p>
                          </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>