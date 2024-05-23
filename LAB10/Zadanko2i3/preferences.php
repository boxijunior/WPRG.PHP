<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Preferences</title>
</head>
<body>

<h1>Choose your display preferences: </h1>

<form action="savePref.php" method="post">
    <label for="bgColour">Background colour: </label>
    <select name="bgColour" id="bgColour">
        <option value="white">White</option>
        <option value="gray">Gray</option>
        <option value="darkGray">Dark Gray</option>
    </select><br>

    <label for="textColour">Text colour: </label>
    <select name="textColour" id="textColour">
        <option value="hotpink">Pink</option>
        <option value="black">Black</option>
    </select>
    <button type="submit">Save settings</button>
</form>
</body>


</html>
