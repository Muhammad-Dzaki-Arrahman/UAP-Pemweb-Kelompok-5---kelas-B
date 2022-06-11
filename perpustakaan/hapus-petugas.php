<?php

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM petugas WHERE id_Petugas='$id'");
header('location:petugas.php');
?>