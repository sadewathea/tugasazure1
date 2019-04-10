<?php
/**
$host="localhost";
$user="root";
$pass="";
$db="data_siswa";
$sambung=mysql_connect($host,$user,$pass);
mysql_select_db($db,$sambung);
**/
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