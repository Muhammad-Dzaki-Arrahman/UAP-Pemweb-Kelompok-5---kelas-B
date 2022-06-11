<?php 
    include 'koneksi.php';

    if(isset($_POST["submit"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "admin") {
            header("location:dashboard.php");
        } else {
            header("location:index.php");
        }
        
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
    <title>Login</title>
    <style type="text/css">
        body{
            background-image: url('library.jpg');
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center pt-5">
            <div class="card " style="width: 25rem;">
            <div class="card-body">
            <h5 class="card-title">Login</h5>
            <h6 class="card-subtitle mb-3 text-muted">Silakan login terlebih dahulu</h6>
            <form method="POST" action="">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
              </div>
            </div>
            
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>