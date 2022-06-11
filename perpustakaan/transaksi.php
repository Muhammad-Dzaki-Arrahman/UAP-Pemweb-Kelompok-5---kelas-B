<?php
    include('koneksi.php');
    $res = mysqli_query($conn, "SELECT * FROM transaksi");
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
    <title>Transaksi</title>
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
                <h2>Transaksi</h2>

                <a href="tambah-transaksi.php" class="btn btn-primary mt-5">Tambah Transaksi</a>
                <div class="table-responsive mt-3">
                    <table class="table table-hover table-buku">
                        <thead>
                            <tr>
                                <th width="10%">id transaksi</th>
                                <th width="10%">id tamu</th>
                                <th width="10%">id petugas</th>
                                <th width="10%">id buku</th>
                                <th width="15%">tanggal pinjam</th>
                                <th width="15%">tanggal kembali</th>
                                <th width="15%">jumlah buku</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($data = mysqli_fetch_array($res)) {?>
                            <tr>
                                <td><?php echo $data['id_Transaksi'] ?> </td>
                                <td><?php echo $data['id_Tamu'] ?> </td>
                                <td><?php echo $data['id_Petugas'] ?> </td>
                                <td><?php echo $data['id_Buku'] ?> </td>
                                <td><?php echo $data['tanggal_pinjam'] ?> </td>
                                <td><?php echo $data['tanggal_kembali'] ?> </td>
                                <td><?php echo $data['jumlah_buku'] ?> </td>
                                <td>
                                    <a href="edit-transaksi.php?id=<?php echo $data['id_Transaksi'];?>" class="btn btn-warning">Edit
                                    </a>  
                                    
                                    <a href="hapus-transaksi.php?id=<?php echo $data['id_Transaksi'];?>" class="btn btn-danger">Hapus
                                    </a>  
                                    
                                    <a href="kembalikan.php?id=<?php echo $data['id_Transaksi'];?>" class="btn btn-success">Dikembalikan
                                    </a>  
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>