<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['product'])) {
    $product = $_GET['product'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (!isset($_SESSION['cart'][$_SESSION['username']])) {
        $_SESSION['cart'][$_SESSION['username']] = [];
    }
    $_SESSION['cart'][$_SESSION['username']][] = $product;
}

header('Location: index.php');
exit();
