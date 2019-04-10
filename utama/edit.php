<?php
 $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
mysql_select_db("data_siswa") or die ("Gagal membuka database.");
//$edit=mysql_query("SELECT * FROM mhs WHERE nim='$_GET[nim]'");
//$r_edit=mysql_fetch_array($edit);
$nim = $_GET['nim'];
$query = "select * from mhs where nim='$nim'";
$result =  mysql_query($query, $sambung) or die("gagal melakukan query");
     $buff = mysql_fetch_array($result);
                 mysql_close($sambung);
?>
<html>
<head><title>Edit Data</title></head>
<body>
<form name="form1" method="post" action="update.php">
<table>
<tr>
<td>Nim</td><td><input type="text" name="nim" value="<?php echo $buff['nim']; ?>"></td></tr>
<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $buff['nama']; ?>"></td></tr>
<tr><td>Alamat</td><td><input type="text" name="alamat" value="<?php echo $buff['alamat']; ?>" size="50"></td></tr>
<tr><td>Agama</td><td><input type="text" name="agama" value="<?php echo $buff['agama']; ?>"></td></tr>
<tr><td>No. tlpn</td><td><input type="text" name="notlpn" value="<?php echo $buff['notlpn']; ?>"></td></tr>
<tr>
<input value="Simpan" type="submit" name="submit"/>
<input type="button" value="Kembali" onClick="self.history.back()"></td></tr>
</table>
</form>
</body>
</html>