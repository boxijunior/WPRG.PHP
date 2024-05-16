<!DOCTYPE html>
<html>
<head>
    <title>Licznik odwiedzin</title>
    <link rel="stylesheet" type="text/css" href="Zadanko2.css">
</head>

<body>
<div id="main">
    <h1>Licznik odwiedzin strony</h1>
</div>

    <div id="amount">

        <?php
        $file = 'licznik.txt';

        if (isset($_POST['reset'])) {
            $amount = 0;
            file_put_contents($file, $amount);
            echo "<h2>Ilość odwiedzin: " . $amount . "</h2>";

        } else {
            $amount = (file_exists($file)) ? intval(file_get_contents($file)) : 0;
            echo "<h2>Ilość odwiedzin: " . $amount . "</h2>";
            $amount++;
            file_put_contents($file, $amount);
        }
        ?>
    </div><br>

<div id="reset">
    <form method="post">
<input type="submit" name="reset" value="Resetuj licznik">
    </form>
</div>

</body>
</html>

