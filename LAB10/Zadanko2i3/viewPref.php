<?php
session_start();

$bgColour = isset($_SESSION['bgColour']) ? $_SESSION['bgColour'] : "darkGray";
$textColour = isset($_SESSION['textColour']) ? $_SESSION['textColour'] : "pink";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your settings:</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($bgColour); ?>;
            color: <?php echo htmlspecialchars($textColour); ?>;
        }
    </style>
</head>


<body>
<h1>No elo to twoja stronka</h1>
<h3>taki to tekst wlasnie i jego wyglad...</h3>
<a href="preferences.php">Change settings</a>


</body>
</html>
