<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

if (!isset($_COOKIE["capybara_{$username}"])) {
    setcookie("capybara_{$username}", 0, time() + 3600);
    $capycount = 0;


} else {
    $capycount = $_COOKIE["capybara_{$username}"];
}

?>

<!DOCTYPE html>

<html>
<head>
    <title>CAPY COUNTER</title>
</head>



<body>
<div>


<h1>HELO :DDD <?php echo htmlspecialchars($username); ?>!</h1>
<h3>You have <?php echo $capycount; ?> capybaras</h3>

<form action="capybara.php" method="post">
    <input type="hidden" name="action" value="addCapy">
    <button type="submit">Add capybara</button>
</form>
</div>

<a href="logout.php">Log out</a>

</body>
</html>
