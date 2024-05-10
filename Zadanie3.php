<!DOCTYPE html>
<html>
<head>
    <title>Przetwarzanie tekstu</title>
    <link rel="stylesheet" type="text/css" href="Zadanko3.css">
</head>

<body>
<div class="form">
    <form method="post">
        <h1>Analyser and Transformer of Text with Regex in PHP</h1>
        <label>Enter text:</label><br>
        <input type="text" name="textInput"><br>


        <label>Enter Regex Pattern:</label><br>
        <input type="text" name="regexPattern"><br>


        <label>Choose operation:</label><br>
        <select name="operation">
            <option>Match</option>
            <option>Match positions</option>
            <option>Replace</option>
            <option>Validate</option>
        </select><br>

        <input type="submit" name="submit">
    </form>
</div>

<div class="wynik">
</div>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["textInput"];
    $pattern = $_POST["regexPattern"];
    $operation = $_POST["operation"];


    switch ($operation) {
        case "Match":
            if (preg_match_all($pattern, $text, $matches)) {
                echo "<h2>Matches:</h2><br>";
                foreach ($matches[0] as $match) {
                    echo $match[0] . " at position " . $match[1] . "<br>";
                }
            } else {
                echo "No matches found.";
            }
            break;

        case "Replace":
            $replacedText = preg_replace($pattern, $_POST["replacement"], $text);
            echo "<h2>Replaced text:</h2><br>";
            echo $replacedText;
            break;

            case "Validate":
                if (preg_match($pattern, $text)) {
                    echo "<h2>Validation result:</h2><br>";
                    echo "Text matches the pattern.";
                } else {
                    echo "<h2>Validation result:</h2><br>";
                    echo "Text does not match the pattern.";
                }
                break;

        default:
            echo "<h2>Invalid operation:</h2><br>";
            break;
    }
}