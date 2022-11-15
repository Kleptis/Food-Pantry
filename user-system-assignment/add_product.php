<?php

// Get the product data
// $USER_ID = filter_input(INPUT_POST, 'USER_ID', FILTER_VALIDATE_INT);
 $username1 = filter_input(INPUT_POST, 'username1');
 $password2 = filter_input(INPUT_POST, 'password2');
 $photo3 = filter_input(INPUT_POST, 'photo3');
 $status4 = filter_input(INPUT_POST, 'status4');

if ($username1 == null || $password2 == null
                         || $photo3 == null 
                         || $status4 == null ) {
    $error_message = "Invalid data. Check all fields and try again." ;
    include('error.php'); 
} else {
    require_once('database.php');
	    // Add the product to the database  
    $query = 'INSERT INTO users(username, password, photo, status) VALUES (:username1, :password2, :photo3, :status4)';
    $statement = $db->prepare($query);
    //$statement->bindValue(':USER_ID', $USER_ID);
    $statement->bindValue(':username1', $username1);
    $statement->bindValue(':password2', $password2);
    $statement->bindValue(':photo3', $photo3);
    $statement->bindValue(':status4', $status4);
    $statement->execute();
    $statement->closeCursor();
    // Display the Product List page
    header('Location: index.php');
}
?>