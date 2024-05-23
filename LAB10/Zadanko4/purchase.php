<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if (isset($_SESSION['cart'][$_SESSION['username']])) {
    unset($_SESSION['cart'][$_SESSION['username']]);
}

header('Location: cart.php');
exit();
?>