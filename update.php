<?php
include 'knk.php';
$id               = $_POST['id'];
$nama            = $_POST['nama'];
$telepon        = $_POST['telepon'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE SET nama='$nama',telepon='$telepon',alamat='$alamat'";

?>