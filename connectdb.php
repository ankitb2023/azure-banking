try {
    $conn = new PDO("sqlsrv:server = tcp:basicbankwebbbbbb.database.windows.net,1433; Database = basicbankweb", "ankit", "Surat@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}