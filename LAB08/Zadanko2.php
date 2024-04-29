<!DOCTYPE html>
<html>
<head>
    <title>Elo</title>
    <link rel="stylesheet" type="text/css" href="Zadanie2.css">
</head>

<body>

<form method="post">
    <div>
<label>Wprowadź ciąg znaków:</label><br>
    <input type="text" name="string" placeholder="EXAMPLE: bla blabla lalala aaaaa cccc zaza"><br>

        <label>Wybierz operację:</label><br>
    <select name="operacje">
        <option value="extraction">Ekstrakcja unikalnych słów + czestotliwość wystepowania</option>
        <option value="bigSort">Sortowanie alfabetyczne slow</option>
    </select>

        <select id="sorting" name="sortowanie">
            <option value="none">Sortowanie:</option>
            <option value="asc">Rosnaco (jezeli dotyczy)</option>
            <option value="desc">Malejaco (jezeli dotyczy)</option>
        </select><br>

    <input type="submit" value="Wykonaj">
        </div>
</form>

<div id="wynik">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];
    $operacje = $_POST["operacje"];
    $sorting = $_POST["sortowanie"];
    if (empty($string)) {
        echo '<div class="Błąd">Pole tekstowe nie moze byc puste!></div>';
    } else {
        switch ($operacje) {


            case 'extraction':
              $words = str_word_count($string, 1);
              $wordFrequency = array_count_values($words);
              echo "Unikalne słowa i częstotliwość ich występowania: ";
              foreach ($wordFrequency as $word => $frequency) {
                  echo "<br>$word: $frequency<br>";
              }
              break;


                case 'bigSort':
                    $words = str_word_count($string, 1);

                    if ($sorting == "asc") {
                        sort($words);
                    } elseif ($sorting == "desc") {
                        rsort($words);
                    }

                    $string = implode(" ", $words);
                    echo "Wynik: " . $string;
                    break;
        }
    }
}
?>
</div>
</body>
</html>
