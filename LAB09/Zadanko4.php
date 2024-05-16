<!DOCTYPE html>
<html>
<head>
    <title>Reviews</title>
    <link rel="stylesheet" type="text/css" href="Zadanko4.css">
</head>


<body>

<h1>Zarządzanie Opiniami</h1>


<div id="write">
    <form method="post">
        <input type="text" placeholder="Wpisz swoją opinię..." name="newReview"><br>
        <input type="submit" value="Dodaj opinię" name="submit">
    </form>
</div> <br><br>

<div id="manageRev">
    <h2>Opinie:</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["delete"])) {
            $index = $_POST["index"];
            $file = 'reviews.txt';
            $reviews = file($file);
            if (isset($reviews[$index])) {
                unset($reviews[$index]);
                file_put_contents($file, implode("", $reviews));
            }
        }

        if (isset($_POST["newReview"])) {
            $newReview = $_POST["newReview"];
            if (!empty(trim($newReview))) {
                $file = 'reviews.txt';
                $currentReviews = file_get_contents($file);
                $currentReviews .= $newReview . PHP_EOL;
                file_put_contents($file, $currentReviews);
            }
        }
    }

    $reviews = file('reviews.txt');
    foreach ($reviews as $index => $review) {
        echo "<div class='review'>";
        echo "<form method='post'>";
        echo "<p>$review</p>";
        echo "<input type='hidden' name='index' value='$index'>";
        echo "<button type='submit' name='delete' value='Usuń'>Usuń</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>


