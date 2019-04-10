<?php
include("koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$notlpn = $_POST['notlpn'];
$query = mysql_query("update mhs set nama='$nama', alamat='$alamat', agama='$agama',notlpn='$notlpn' where nim='$nim'");
echo "Data Telah diupdate<br>
<a href=\"indexmhs.php\">Kembali</a>";
?>