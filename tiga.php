    <?php
      include "knk.php";
      $name = $_REQUEST['nama'];
      $alm = $_REQUEST['alamat'];
      $telp = $_REQUEST['telp'];
      $conn = mysqli_connect($servername, $username, $password, $database) or die ("Koneksi gagal");
      $mysqli = "INSERT INTO input_tabel (nm, addr, tlp) VALUES ('$name', '$alm', '$telp')";
      $result = mysqli_query($conn, $mysqli);
      echo "Input berhasil";
      mysqli_close($conn);
    ?>