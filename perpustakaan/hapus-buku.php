<?php

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM buku WHERE id_Buku='$id'");
header('location:buku.php');
?>