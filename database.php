<?php
// function OpenCon()
// {
//     $dbhost = "localhost";
//     $dbuser = "group7";
//     $dbpass = "wlB0l@s1J0T";
//     $db = "group7_db";
//     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

//     return $conn;
// }

// function CloseCon($conn)
// {
//     $conn -> close();
// }


    $dsn = 'mysql:host=localhost;port:3306;dbname=group7_db';    //data source name. Represents ODBC data source
    //$dsn = 'mysql:host=141.215.80.154';    //data source name. Represents ODBC data source
    $username = 'group7';
    $password = 'wlB0l@s1J0T';

    try {
        printf("%s || %s || %s", $dsn, $username, $password);
        $db = new PDO($dsn, "root", "");
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
		//print("data_connection_error:".$error_message);
        include('error.php');
        exit();
    }
?>