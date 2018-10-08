<?php
include('kon.php'); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<?php
$sql	= 'select * from contacts';
$query	= mysqli_query($db_link,$sql);
?>
<h2><strong><p align="center">Address Book</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">ID</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Telepon</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF">
    <a href="tambah.php">TAMBAH</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
   <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['id']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['telepon']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
	<a href="edit.php?ni=<?php echo $data['id'];?>" title="Edit kontak ini"> || edit || </a>
	<a href="delete.php?ni=<?php echo $data['id'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>