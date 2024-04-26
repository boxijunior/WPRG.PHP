<?php

function KapibaraJeMarchewke()
{

    $random = rand(1, 10);
    if ($random <= 6) {
        return true;
    } else {
        return false;
    }
}
    ?>

<!doctype html>
<html>
<head>
    <title>Kapibar + marchewka</title>
</head>
<body>
<div class="box">
    <img src="https://critterfacts.com/wp-content/uploads/2018/06/Capybara-with-open-mouth.jpg" width="250px" height="250px">
    <?php
    $ifMarchew = KapibaraJeMarchewke();
    if ($ifMarchew) : ?>
    <img src="https://i.ytimg.com/vi/ApnxaywZLOI/maxresdefault.jpg" width="250px" height="250px">
    <?php endif ?>
</div>
</body>
</html>
