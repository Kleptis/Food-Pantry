<?php
require('database.php');
$username = filter_input(INPUT_POST, 'username1');
$status = filter_input(INPUT_POST, 'status');
// Get category ID
$USER_ID = filter_input(INPUT_GET, 'USER_ID', FILTER_VALIDATE_INT);
if ($USER_ID == NULL || $USER_ID == FALSE) {
    $USER_ID = 1;
}
// echo $username . "<html><br></html>" . $status;
// Get name for selected category
$queryCategory = 'SELECT * FROM users WHERE username = :username';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':username', $username);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
// if(!empty($category)){
//     echo "<html><br></html>" . $category[1] . "<html><br></html>";
// }else{
//     echo "<html><br></html>" . "user does not exist";
//     exit();
// }

$updateQuery = 'UPDATE users SET status = :status1 WHERE username = :username';
$statement2 = $db->prepare($updateQuery);
$statement2->bindValue(':status1', $status);
$statement2->bindValue(':username', $username);
$statement2->execute();
$statement2->closeCursor();
header('Location: index.php');

// foreach ( $category as $user){
//     echo $user['1'];
//     echo "<html><br></html>";
// }

//$statement2->closeCursor();
// $username1 = filter_input(INPUT_POST, 'username1');
// $status = filter_input(INPUT_POST, 'status');

// if ($username1 == null || $status == null ) {
//     $error_message = "Invalid data. Check all fields and try again." ;
//     include('error.php'); 
// } else {
//     require_once('database.php');
// 	    // Add the product to the database  
//     $query = 'INSERT INTO users(username, password, photo, status) VALUES (:username1, :password2, :photo3, :status4)';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':username1', $username1);
//     $statement->bindValue(':status', $status);
//     $statement->execute();
//     $statement->closeCursor();
//     header('Location: index.php');}

// //
// // $sql = "UPDATE user SET status=$status WHERE username=$username1";

// // echo $sql;
// // echo "<html><br></html>";
// // // Get category ID
// // if (!isset($status)) {
// //     $status = filter_input(INPUT_GET, 'status', FILTER_VALIDATE_INT);
// //     if ($status == NULL || $status == FALSE) {
// //         $status = 1;
// //     }
// // }

// echo $status;
// echo "<html><br></html>";

// // Get name for selected category
// $query2 = 'SELECT username FROM user WHERE EXISTS 
// (SELECT username FROM user WHERE username=$username1)';
// echo $query2;



// // if ($conn->query($sql) === TRUE) {
// //   echo "Record updated successfully";
// // } else {
// //   echo "Error updating record: " . $conn->error;
// // }
?>