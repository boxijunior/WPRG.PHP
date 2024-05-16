<!DOCTYPE html>
<html>


<head>
    <title>Helo</title>
    <link rel="stylesheet" type="text/css" href="Zadanko3.css">
</head>



<body>

<h1>Oblicz wiek i dni robocze</h1>
<div class="main">
<form method="post" id="ageTime">
    <h2>Oblicz wiek i czas lokalny</h2>

    <input type="text" name="birthdate" placeholder="Data urodzenia (dd-mm-yyyy)" required>


    <select name="timezone">
        <option value="Africa/Abidjan">Africa/Abidjan</option>
        <option value="Europe/Warsaw">Europe/Warsaw</option>
        <option value="UK/London">UK/London</option>
    </select>


    <input type="submit" value="Oblicz wiek i czas">
</form>
</div><br><br>

<div class="main">
    <form method="post">
        <h2>Oblicz dni robocze</h2>
       <input type="text" name="startDate" placeholder="Data początkowa (dd-mm-yyy)" required>
        <input type="text" name="endDate" placeholder="Data końcowa (dd-mm-yyy)" required>
        <input type="submit" value="Oblicz dni robocze">
    </form>
</div>

<div id="result">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["birthdate"])) {
    $birthdate = $_POST["birthdate"];
    $timezone = $_POST['timezone'];

    $age = date_diff(date_create($birthdate), date_create('today'))->y;

    date_default_timezone_set($timezone);
    $localTime = date("H:i:s");

    echo "<p>Wiek: $age lat &nbsp; Czas lokalny: $localTime</p>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["startDate"])) {
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];

    function getWorkingDays($startDate, $endDate)
    {
      $workingDays = [1, 2, 3, 4, 5];
    $holidayDays = ['*-12-25', '*-01-01'];
    $daysDiff = abs(strtotime($endDate) - strtotime($startDate));
    $dayCount = floor($daysDiff / (60 * 60 * 24)) + 1;

    $fullWeekCount = floor($dayCount / 7);
    $workingDayCount = $fullWeekCount * count($workingDays);


    for ($i = 0; $i < $dayCount % 7; ++$i) {
        $day = date('N', strtotime("$startDate + $i days"));
        if (in_array($day, $workingDays)) {
            ++$workingDayCount;
        }
    }

    foreach ($holidayDays as $holiday) {
        $time = strtotime($holiday, strtotime($startDate));
        if (date('Y-m-d', $time) >= $startDate && date('Y-m-d', $time) <= $endDate && date('N', $time) != 7 && !in_array(date('N', $time), $workingDays)) {
            --$workingDayCount;
        }
    }

    return $workingDayCount;
}

    $workingDays = getWorkingDays($startDate, $endDate);
    echo "Liczba dni roboczych między $startDate a $endDate: $workingDays";
}

?>
</div>

</body>
</html>



<?php
