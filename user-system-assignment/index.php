<?php
require('database.php');
// Get category ID
$USER_ID = filter_input(INPUT_GET, 'USER_ID', FILTER_VALIDATE_INT);
if ($USER_ID == NULL || $USER_ID == FALSE) {
    $USER_ID = 1;
}
// Get name for selected category

$queryCategory = 'SELECT * FROM users WHERE USER_ID = :USER_ID';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':USER_ID', $USER_ID);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();

// Get all users
$queryAllCategories = 'SELECT * FROM users ORDER BY USER_ID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$category = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
// $queryProducts = 'SELECT * FROM products WHERE USER_ID = :USER_ID ORDER BY productID';
// $statement3 = $db->prepare($queryProducts);
// $statement3->bindValue(':USER_ID', $USER_ID);
// $statement3->execute();
// $products = $statement3->fetchAll();
// $statement3->closeCursor();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>
<main>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class= "col-lg">
        <h1>List of Users and their Statuses:</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Username:</th>
                    <th scope="col">Status:</th>
                </tr>
                </thead>
                <?php foreach ( $category as $user) : ?>
                <tbody>
                    <tr>
                        <td scope="col">
                            <?php echo $user['1']; ?>
                        </td>
                        <td scope="col">
                            <?php echo $user['4']; ?>
                        </td>
                    </tr>
                </tbody>                    
                <?php endforeach; ?>
            </table>
        </div>
        <div class= "col-sm">
            <form action="add_product.php" method="post">
            <h2>Create New User</h2>
            <label for="username1">Username:</label><br>
            <input name="username1"></input><br>
            <label for="password2">Password:</label><br>
            <input name="password2" input type="password"></input><br>
            <label for="photo3">Select Image:</label><br>
            <input type="file" id="photo3" name="photo3" accept="image/*"><br>
            <label for="status4">Status:</label><br>
            <select name="status4" id="status4">
                    <option value="happy">happy</option>
                    <option value="angry">angry</option>
                    <option value="sad">sad</option>
                    <option value="sleepy">sleepy</option>
                </select>
            <input type="submit" id="createUser" onClick></input>
            <br><br><br>
            </form>

            <h2>Modify User Status</h2>
            <form action="update.php" method="post">
                <label for="username1">username:</label>
                <input name="username1"></input><br>
                <label for="status">Choose a status:</label>
                <select name="status" id="status">
                    <option value="happy">happy</option>
                    <option value="angry">angry</option>
                    <option value="sad">sad</option>
                    <option value="sleepy">sleepy</option>
                </select>
                <input type="submit" id="modifyUser" onClick></input>
                </form>
        </div>
    </div>
</main>    
<footer></footer>
</body>
</html>