<?php
include 'function/config.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query($con,"UPDATE crud SET judul='$judul', penulis='$penulis', penerbit='$penerbit' WHERE id='$id' ");
header("Location : index.php?pesan=update");

?>