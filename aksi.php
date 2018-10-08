<?php
include('kon.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$id	= $_POST['id'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$telepon	= $_POST['telepon'];
	
	$sql	= 'insert into contacts (id,nama,alamat,telepon) values ("'.$id.'","'.$nama.'","'.$alamat.'","'.$telepon.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: address.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
if(isset($_POST['tedit'])){
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$telepon	= $_POST['telepon'];
	$id	= $_POST['id'];
	
	$sql	= 'update contacs set nama="'.$nama.'", alamat="'.$alamat.'", telepon="'.$telepon.'" where id="'.$id.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: address.php');
	}
	else{
		echo 'Gagal';
	}
}
?>