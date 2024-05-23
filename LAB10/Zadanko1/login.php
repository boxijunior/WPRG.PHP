<?php

session_start();

$user = [
    'stinker' => 'password1',
    'boxijunior' => 'password2',
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if (isset($user[$username]) && $user[$username] === $password) {
        $_SESSION['username'] = $username;
        setcookie('username', $username, time() + 3600);
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
    <title>LOGIN</title>
</head>

<body>

<div>
<form action="login.php" method="post">

    <label for="username">Username: </label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Log in</button>
</form>
    </div>

<?php
if (isset($error)) echo "<p>$error</p>";
?>

</body>
</html>
