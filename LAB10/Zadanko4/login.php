<?php
session_start();

$users = [
    'stinker' => 'password1',
    'boxijunior' => 'password2',
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();


    } else {
        $error = "Wrong username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOG IN</title>
</head>

<body>
<h1>Log in:</h1>
<form action="login.php" method="post">

    <label for="username">Username: </label>
    <input type="text" name="username" id="username" required><br>


    <label for="password">Password: </label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Log in</button>
</form>

<?php if (isset($error)) echo "<p>$error</p>"; ?>


</body>
</html>
