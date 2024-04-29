<!DOCTYPE html>
<html>
<head>
    <title>Zuzik</title>
    <link rel="stylesheet" type="text/css" href="Zadanko1.css">
</head>
<body>

<form method="post">
<h2>Operacje na ciagach znakow: </h2>
<label>Wpisz tekst:</label><br>
<input type="text" name="input_string">

<br>

<label>Wybierz operację:</label><br>
<select name="operacja">
    <option value="Odwrocenie">Odwrocenie</option>
    <option value="Zamiana liter na wielkie">Zamiana liter na wielkie</option>
    <option value="Zamiana liter na male">Zamiana liter na male</option>
    <option value="Policz znaki">Policz znaki</option>
    <option value="Usun znaki biale">Usun znaki biale</option>
</select>
<br>

    <div class="submit">
<input type="submit" value="Wykonaj" name="Wykonaj">
    </div>

<div id="wynik">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_string = $_POST["input_string"];
    $operacja = $_POST["operacja"];
}

if (empty($input_string)) {
    echo '<div class="Blad">Pole tekstowe nie moze byc puste!></div>';
} else {
    switch ($operacja) {

        case "Odwrocenie":
            $wynik = strrev($input_string);
            break;


            case "Zamiana liter na wielkie":
                $wynik = strtoupper($input_string);
                break;


        case "Zamiana liter na male":
            $wynik = strtolower($input_string);
            break;



                case "Policz znaki":
                    $wynik = strlen($input_string);
                    break;


                    case "Usun znaki biale":
                        $wynik = trim($input_string);
                        break;

        default:
            $wynik = "Wybierz operację:";


    }
    echo "Wynik: " . $wynik;
}
?>
</div>
</form>
</body>
</html>

