<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['bgColour'] = $_POST['bgColour'];
    $_SESSION['textColour'] = $_POST['textColour'];
    header('Location: confirm.php');
    exit();
}
?>