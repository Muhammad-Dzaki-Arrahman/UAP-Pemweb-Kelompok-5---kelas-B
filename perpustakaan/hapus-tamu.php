<?php

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tamu WHERE id_Tamu='$id'");
header('location:tamu.php');
?>