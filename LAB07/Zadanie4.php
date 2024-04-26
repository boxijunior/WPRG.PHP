
<DOCTYPE! html>
<html>
<head>
    <title>Kalkulator zbiorow :)</title>
    <link rel="stylesheet" type="text/css" href="Zadanie4.css">
</head>
<body>
<h2>Kalkulator zbiorow!!!</h2>
<form>
    <div id="box">
        Zbior A (liczby oddzielone przecinkami):
    <input type="text"> <br>
        Zbior B (liczby oddzielone przecinkami):
    <input type="text">
    <select name="Operacja: ">
        <option value="suma">Suma</option>
        <option value="roznica">Roznica</option>
        <option value="czWspolna">Czesc wspolna</option>
    </select>
    <input type="button" value="Oblicz">
    </div>
</form>

<div class="Wynik: ">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zbiorA = $_POST["Zbior A"];
        $zbiorB = $_POST["Zbior B"];
        $operacja = $_POST["Operacja"];

        $zbiorA = explode(" ", $zbiorA);
        $zbiorB = explode(" ", $zbiorB);

        function suma($zbiorA, $zbiorB) {
            return array(array_merge($zbiorA, $zbiorB));
        }

        function roznica($zbiorA, $zbiorB) {
            return array(array_merge($zbiorA, $zbiorB));
        }
        function czWspolna($zbiorA, $zbiorB) {
            return array(array_merge($zbiorA, $zbiorB));
        }

        switch ($operacja) {
            case "suma":
                $wynik = suma($zbiorA, $zbiorB);
                break;


                case "roznica":
                    $wynik = roznica($zbiorA, $zbiorB);
                    break;

                    case czWspolna($zbiorA, $zbiorB);
                    $wynik = czWspolna($zbiorA, $zbiorB);
                    break;

            default:
                $wynik = "Wybierz operacje: ";
        }

        echo "Wynik: " . implode(", " , $wynik);
    }
    ?>
</div>
</body>
</html>