<?php
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
?>
