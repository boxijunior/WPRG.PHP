<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$cart = isset($_SESSION['cart'][$_SESSION['username']]) ? $_SESSION['cart'][$_SESSION['username']] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
</head>
<body>
<h1>Your Cart</h1>
<?php if (empty($cart)): ?>
    <p>Your cart is empty.</p>
<?php else: ?>
    <ul>
        <?php foreach ($cart as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form action="purchase.php" method="post">
    <button type="submit">Purchase</button>
</form>
<a href="index.php">Continue Shopping</a>
</body>
</html>
