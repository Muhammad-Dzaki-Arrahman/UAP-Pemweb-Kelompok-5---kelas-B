<?php

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM transaksi WHERE id_Transaksi='$id'");
header('location:transaksi.php');
?>