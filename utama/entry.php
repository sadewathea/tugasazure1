<?php
include("koneksi.php");
/**
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$notlpn = $_POST['notlpn'];
$query = mysql_query("insert into mhs values  ('$nim','$nama','$alamat','$agama','$notlpn')");
echo "Data Telah disimpan<br>
<a href=\"indexmhs.php\">Kembali</a>";
**/
try {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $agama = $_POST['agama'];
            $notlpn = $_POST['notlpn'];
            // Insert data
            $sql_insert = "INSERT INTO mahasiswa (nim, nama, alamat, agama, notlp) 
                        VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql_insert);
            $stmt->bindValue(1, $nim);
            $stmt->bindValue(2, $nama);
            $stmt->bindValue(3, $alamat);
            $stmt->bindValue(4, $agama);
			$stmt->bindValue(5, $notlpn);
            $stmt->execute();
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
		
?>