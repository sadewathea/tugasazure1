<html>
<head>
<title>Daftar Mahasiswa</title>

<link href="../css/css.css" rel="stylesheet" type="text/css">
<link href="../css/tabel.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//$sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
//mysql_select_db("data_siswa") or die ("Gagal membuka database.");

    $host = "hexawebappserver.database.windows.net";
    $user = "hexasoft";
    $pass = "Iqbal2410";
    $db = "hexawebapp";

    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
?>
<table border="0" align="left" cellpadding="0" cellspacing="1" class="tb_admin">
<tr>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Alamat</th>
<th>Agama</th>
<th>No_tlpn</th>
<th colspan="3">Aksi</th>
</tr>
<?php
$query = "select * from mhs";
$result = mysql_query($query, $sambung);
//$no = 0;
while ($buff = mysql_fetch_array($result)){
//$no++;
?>
<tr>
<td><?php echo $buff['nim']; ?></td>
<td><?php echo $buff['nama']; ?></td>
<td><?php echo $buff['alamat']; ?></td>
<td><?php echo $buff['agama']; ?></td>
<td><?php echo $buff['notlpn']; ?></td>
<td><a href="edit.php?nim=<?php echo $buff['nim']; ?>">Edit</a></td>
<td><a href="hapus.php?nim=<?php echo $buff['nim']; ?>">Hapus</a></td>
</tr>
<?php
}
mysql_close($sambung);
?>
</table>
<?php
try {
            $sql_select = "SELECT * FROM mahasiswa";
            $stmt = $conn->query($sql_select);
            $mahasiswa = $stmt->fetchAll(); 
            if(count($mahasiswa) > 0) {
                echo "<h2>Daftar Mahasiswa:</h2>";
                echo "<table>";
				echo "<tr><th>NIM</th>";
                echo "<tr><th>Nama</th>";
                echo "<th>Alamat</th>";
                echo "<th>Agama</th>";
                echo "<th>Nomer Telepon</th></tr>";
                foreach($mahasiswa as $registrant) {
					echo "<tr><td>".$registrant['nim']."</td>";
                    echo "<tr><td>".$registrant['nama']."</td>";
                    echo "<td>".$registrant['alamat']."</td>";
                    echo "<td>".$registrant['agama']."</td>";
                    echo "<td>".$registrant['notlp']."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>No one is currently registered.</h3>";
            }
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
?>
<p align="left">&nbsp;</p><br><br><br><br><br><br>
<p align="left"><a href="tambah.html"><span class="linkprod">Tambah Data</span></a></p>
</body>
</html>