<?php 
    include 'koneksi.php';

    if(isset($_POST["submit"]))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $namalengkap = $_POST['nama_lengkap'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $notelepon = $_POST['no_telepon'];
        $alamat = $_POST['alamat'];

        mysqli_query($conn,"UPDATE petugas SET username='$username', password='$password', nama_lengkap='$namalengkap', jenis_kelamin='$jeniskelamin', no_telepon='$notelepon', alamat='$alamat' WHERE id_Petugas='$id'");
        header("location:petugas.php");
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
    <title>Update Petugas</title>
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
                <h2>Update Petugas</h2>
                <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $raw_data = mysqli_query($conn, "SELECT * FROM petugas WHERE id_Petugas='$id'");
                    $data = mysqli_fetch_assoc($raw_data); 
                ?>
                <form action="" method="post" class="pt-5 form-tambah-petugas">
                    <input type="hidden" name="id" value="<?php echo $data['id_Petugas']?>">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-1 col-form-label">username</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-1 col-form-label">password</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $data['password']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama lengkap" class="col-sm-1 col-form-label">nama lengkap</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="nama lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis kelamin" class="col-sm-1 col-form-label">jenis kelamin</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jenis kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no telepon" class="col-sm-1 col-form-label">no telepon</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="no telepon" name="no_telepon" value="<?php echo $data['no_telepon']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-1 col-form-label">alamat</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']?>">
                        </div>
                    </div>
                    <div class="mb-3 row pt-2">
                        <div class="col-sm-2">
                            <input type="submit" value="Update Petugas" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>