<?php 
    include 'koneksi.php';

    if(isset($_POST["submit"]))
    {
        $id = $_POST['id'];
        $idtamu = $_POST['id_Tamu'];
        $idpetugas = $_POST['id_Petugas'];
        $idbuku = $_POST['id_Buku'];
        $tanggalpinjam = $_POST['tanggal_pinjam'];
        $tanggalkembali = $_POST['tanggal_kembali'];
        $jumlahbuku = $_POST['jumlah_buku'];

        mysqli_query($conn,"UPDATE transaksi SET id_Tamu='$idtamu', id_Petugas='$idpetugas', id_Buku='$idbuku', tanggal_pinjam='$tanggalpinjam', tanggal_kembali='$tanggalkembali', jumlah_buku='$jumlahbuku' WHERE id_Transaksi='$id'");
        header("location:transaksi.php");
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
    <title>Update Transaksi</title>
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
                <h2>Update Transaksi</h2>
                <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $raw_data = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_Transaksi='$id'");
                    $data = mysqli_fetch_assoc($raw_data); 
                ?>
                <form action="" method="post" class="pt-5 form-tambah-transaksi">
                    <input type="hidden" name="id" value="<?php echo $data['id_Transaksi']?>">
                    <div class="mb-3 row">
                        <label for="id tamu" class="col-sm-1 col-form-label">id Tamu</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id tamu" name="id_Tamu" value="<?php echo $data['id_Tamu']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id petugas" class="col-sm-1 col-form-label">id Petugas</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id petugas" name="id_Petugas" value="<?php echo $data['id_Petugas']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id buku" class="col-sm-1 col-form-label">id Buku</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id buku" name="id_Buku" value="<?php echo $data['id_Buku']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal pinjam" class="col-sm-1 col-form-label">Tanggal Pinjam</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" id="tanggal pinjam" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal kembali" class="col-sm-1 col-form-label">Tanggal kembali</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" id="tanggal kembali" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah buku" class="col-sm-1 col-form-label">Jumlah Buku</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jumlah buku" name="jumlah_buku" value="<?php echo $data['jumlah_buku']?>">
                        </div>
                    </div>
                    <div class="mb-3 row pt-2">
                        <div class="col-sm-2">
                            <input type="submit" value="Update Transaksi" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>