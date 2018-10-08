<?php
include 'knk.php';
$id= $_GET['id'];
$query="DELETE from addressbook where id='$id'";
mysqli_query($koneksi, $query);
?>