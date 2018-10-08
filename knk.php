<?php
$servername = "localhost";
$database = "addressbook";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
if (isset($_GET['tambah'])) {
    $nama=$_GET['name'];
    $alamat=$_GET['address'];
    $telp=$_GET['telp'];
    $test = mysqli_query($link,"SELECT * FROM phonebook where name='$nama' and address='$alamat' and telephone='$telp'");


    if (!mysqli_fetch_array($test)) {
        mysqli_query($link,"INSERT INTO phonebook (name, address,telephone) VALUES ('$nama','$alamat','$telp')");
        echo '<script language="javascript">';
        echo 'alert("Data telah diinputkan!")';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Data gagal diinputkan!")';
        echo '</script>';
    }
    
}
mysqli_close($conn);
?>