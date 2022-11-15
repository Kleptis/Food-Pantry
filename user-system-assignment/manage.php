<?php
require_once('database.php');

// Get category ID
if (!isset($status)) {
    $status = filter_input(INPUT_GET, 'status', FILTER_VALIDATE_INT);
    if ($status == NULL || $status == FALSE) {
        $status = 1;
    }
}

// Get name for selected category
$queryCategory = 'SELECT * FROM categories WHERE categoryID = :status';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':status', $status);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['categoryName'];
$statement1->closeCursor();

// Get all categories
$queryAllCategories = 'SELECT * FROM categories ORDER BY categoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
$queryProducts = 'SELECT * FROM products WHERE categoryID = :status ORDER BY productID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':status', $status);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="main.css" />
</head>
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Product List</h1>
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
           <?php foreach ($categories as $category) : ?>
           <li><a href="manage.php?status=<?php
                       echo $category['categoryID']; ?>">
                   <?php echo $category['categoryName']; ?>
               </a>
           </li>
           <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>
 
    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>
 
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?>
                </td>
				                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                        value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="status"
                        value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_product_form.php">Add Product</a></p>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date('Y'); ?> My Guitar Shop, Inc.</p>
</footer>
</body>

