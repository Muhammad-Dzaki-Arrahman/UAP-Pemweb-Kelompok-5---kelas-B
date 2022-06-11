<?php 
    include 'koneksi.php';

    if(isset($_POST["submit"]))
    {
        $id = $_POST['id'];
        $tanggalkembali = $_POST['tanggal_kembali'];

        mysqli_query($conn,"UPDATE transaksi SET  tanggal_kembali='$tanggalkembali' WHERE id_Transaksi='$id'");
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
    <title>Kembalikan Buku</title>
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
                <h2>Kembalikan Buku</h2>
                <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $raw_data = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_Transaksi='$id'");
                    $data = mysqli_fetch_assoc($raw_data); 
                ?>
                <form action="" method="post" class="pt-5 form-tambah-transaksi">
                    <input type="hidden" name="id" value="<?php echo $data['id_Transaksi']?>">
                
                    <div class="mb-3 row">
                        <label for="tanggal kembali" class="col-sm-1 col-form-label">Tanggal kembali</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" id="tanggal kembali" name="tanggal_kembali">
                        </div>
                    </div>
                  
                    <div class="mb-3 row pt-2">
                        <div class="col-sm-2">
                            <input type="submit" value="Buku Dikembalikan" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>