<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('kon.php');
	if(isset($_GET['id'])){
		$id		= $_GET['id'];
		$query	= mysqli_query($db_link,'select * from contacts where id = "'.$id.'"');
		$data  	= mysqli_fetch_array($query);
		$nama	= $data['nama'];
		$alamat	= $data['alamat'];
		$telepon= $data['telepon'];
	}
	else{
	$nama = '';
	$alamat = '';
	$telepon = '';
	}
?>
</p></h2>
<form method="post" name="frm" action="aksi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">ID</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="ID" value="<?php echo $_GET['id']; ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $nama; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $alamat; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">telepon</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
		<input name="kelas" type="text" size="50" value="<?php echo $telepon; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>