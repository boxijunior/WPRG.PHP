<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$products = ['Product 1', 'Product 2', 'Product 3'];
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Shop</title>
    </head>
    <body>
    <h1>Welcome to the Shop</h1>
    <h2>Products</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo htmlspecialchars($product); ?>
                <a href="addCart.php?product=<?php echo urlencode($product); ?>">Add to cart</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a><br>
    <a href="logout.php">Logout</a>
    </body>
    </html>
