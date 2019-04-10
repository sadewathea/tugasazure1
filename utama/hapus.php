<?php
include("koneksi.php");
mysql_query("DELETE from mhs WHERE nim='$_GET[nim]'");
echo"Data Telah dihapus<br>
<a href=\"indexmhs.php\">Kembali</a>";
?>