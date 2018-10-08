<?php
$nama   = $_POST['nama'];
$no_telepon   = $_POST['no_telepon'];
$alamat   = $_POST['alamat'];

include "knk.php";
mysql_query ("insert into addressbook(nama, no_telepon, alamat) values('$nama','$no_telepon','$alamat')")
or die ("menambah gagal.");
echo "Menambah data berhasil";  
