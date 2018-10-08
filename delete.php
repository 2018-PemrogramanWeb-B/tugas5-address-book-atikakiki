<?php
include('kon.php');
$id	= $_GET['id'];

$sql 	= 'delete from contacts where id="'.$id.'"';
$query	= mysqli_query($db_link,$sql);
header('location: address.php');
?>