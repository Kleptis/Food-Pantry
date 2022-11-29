<?php
    $dsn = 'mysql:host=localhost:3306;dbname=group7_db';
    $username = 'group7';
    $password = 'wlB0l@s1J0T';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
		//print("data_connection_error:".$error_message);
        include('error.php');
        exit();
    }
?>