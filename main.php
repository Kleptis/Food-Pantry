<?php
require('database.php');
// $conn = OpenCon();
// echo "connected successfully";
// CloseCon($conn);
// $USER_ID = filter_input(INPUT_GET, 'USER_ID', FILTER_VALIDATE_INT);
// if ($USER_ID == NULL || $USER_ID == FALSE) {
//     $USER_ID = 1;
// }
// // Get name for selected category

// $queryCategory = 'SELECT * FROM users WHERE USER_ID = :USER_ID';
// $statement1 = $db->prepare($queryCategory);
// $statement1->bindValue(':USER_ID', $USER_ID);
// $statement1->execute();
// $category = $statement1->fetch();
// $statement1->closeCursor();

// // Get all users
// $queryAllCategories = 'SELECT * FROM users ORDER BY USER_ID';
// $statement2 = $db->prepare($queryAllCategories);
// $statement2->execute();
// $category = $statement2->fetchAll();
// $statement2->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Pantry Web Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ^Bootstrap included from CDN (Content Delivery Network).  -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Food Pantry</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="main.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.html">Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.html">Admin</a>
      </li>
    </ul>
  </div>
</nav>
</head>
<body>
   <div class="w-100 h-100 text-center" style="margin-bottom:0">
       <img src="images/UMD.jpg" class="w-100">
   </div>
<div class="container">
    <div class="row intro">
        <h1>Student Food Pantry</h1>
    </div>
    <div class="row">
        <div class="col">
          <h2>WELCOME!</h2> <!-- comment -->
          <p>As part of the UM-Dearborn Community, the Student Food Pantry exists to support students on their journey as they work toward achieving their goals. We are committed to increasing access to food as a key to success, by providing assistance to any student in need!</p>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <h2>Order</h2>
        <p>On this page you can check out what's in stock in the food pantry!</p>
      </div>
    </div>
    <div class="row">
      <div class="w-50">
        <h2>Donate to the food pantry!</h2>
        <h3>We need your help.</h3>
        <img src= "images/group.jpg" width="350" height="250"
          alt="UM Dearborn students in front of UoM logo" />
        <p>To keep our pantry stocked, we rely on the generous donations
        from our university and community</p>
        <p>Donations can be dropped off in the Office of Student Life
        (2130 University Center).</p>
      </div>
      <div class="w-50">
        <h2>Come pick up some fresh bread from Panera.</h2>
        <p>October 11, 2022</p>
        <img src="images/bread.jpg" width="350" height="350"
          alt="UM Dearborn students" />
        <p>We have delicious donations from Panera Bread outside of our office each Friday!</p>
        <p>Stop by room 2136 in the University Center today!</p>
        <p>An assortment of breads, including country rustic and brioche! Come grab while they last!</p>
        <br>
      </div>
    </div>
<!-- </div>just testing  -->

</html>
