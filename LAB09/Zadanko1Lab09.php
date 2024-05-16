<!DOCTYPE html>
<html>
<head>
    <title>SussyBaka</title>
    <link rel="stylesheet" type="text/css" href="Zadanko1.css">
</head>
<body>
    <h1>Wprowadź nazwę pliku lub katalogu</h1>
    <div id="box">
<form method="post">
    <input type="text" name="fileName"  id="fileName" placeholder="fileName.type"><br>
    <input type="submit" value="Submit">
</form>
</div><br><br>

<div id="results">
    <h2>File size: </h2>
    <?php
    if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        if (isset ( $_POST ['fileName'] )) {
            $name = $_POST ['fileName'];
            $size = filesize($name);
            echo "<h3>" . $size . " Bytes</h3>";
            echo "<h3>" . $size/1000 . " KB</h3>";
            echo "<h3>" . $size/1000000 . " MB</h3>";
            echo "<h3>" . $size / 1000000000 . " GB</h3>";
        } else {
            echo "<h3>File not found</h3>";
        }
    }
    ?>
</div>
</body>
</html>


