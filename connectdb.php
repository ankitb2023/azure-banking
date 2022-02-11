
    $conn = new PDO("sqlsrv:server = tcp:basicbankwebbbbbb.database.windows.net,1433; Database = basicbankweb", "ankit", "Surat@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    print("Error connecting to SQL Server.");
    die(print_r($e));

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ankit", "pwd" => "{your_password_here}", "Database" => "basicbankweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:basicbankwebbbbbb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>