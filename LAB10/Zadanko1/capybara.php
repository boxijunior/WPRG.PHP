<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'addCapy') {
    if (isset($_COOKIE["capybaras_{$username}"])) {
        $capycount = $_COOKIE["capybara_{$username}"] + 1;
        echo "Updating capybaras count to: $capycount<br>";
        setcookie("capybara_{$username}", $capycount, time() + 3600);

    } else {
        setcookie("capybaras_{$username}", 1, time() + 3600);
    }

    header('Location: index.php');
    exit();

} else {
    header('Location: index.php');
    exit();
}
?>
}


