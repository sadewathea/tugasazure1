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
    $conn = new PDO("sqlsrv:server = tcp:hexawebappserver.database.windows.net,1433; Database = hexawebapp", "hexasoft", "Iqbal2410");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
try {
            $sql_select = "SELECT * FROM mahasiswa";
            $stmt = $conn->query($sql_select);
            $mahasiswa = $stmt->fetchAll(); 
            if(count($mahasiswa) > 0) {
                echo "<h2>Daftar Mahasiswa:</h2>";
                echo "<table>";
		echo "<tr><th>NIM</th>";
                echo "<th>Nama</th>";
                echo "<th>Alamat</th>";
                echo "<th>Agama</th>";
                echo "<th>Nomer Telepon</th></tr>";
                foreach($mahasiswa as $registrant) {
		    echo "<tr><td>".$registrant['nim']."</td>";
                    echo "<td>".$registrant['nama']."</td>";
                    echo "<td>".$registrant['alamat']."</td>";
                    echo "<td>".$registrant['agama']."</td>";
                    echo "<td>".$registrant['notlp']."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>Belum ada data mahasiswa.</h3>";
            }
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
?>
<p align="left">&nbsp;</p><br><br><br><br><br><br>
<p align="left"><a href="tambah.html"><span class="linkprod">Tambah Data</span></a></p>
</body>
</html>
