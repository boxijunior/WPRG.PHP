<doctype! html>
<html>
<head>
    <title>9KAPIBAR9</title>
<link rel="stylesheet" type="text/css" href="Ex09Lab06.css"
</head>
<body>

<?php
$kapibarFoto = array(
"http://wallsdesk.com/wp-content/uploads/2017/01/Capybara-High-Definition.jpg",
"https://featuredcreature.com/wp-content/uploads/2012/10/Capybara_baby_bottle2.jpg",
"http://4.bp.blogspot.com/-bArG8hMyAOE/UDh3ywVfWhI/AAAAAAAAO98/n-inb8twHLg/s1600/Capybara5.jpg",
"http://www.naturephoto-cz.com/fullsize/sejna/capybara-el9b3912kpex.jpg",
"https://www.myconfinedspace.com/wp-content/uploads/2015/04/Capybara-Family.jpg",
"https://featuredcreature.com/wp-content/uploads/2012/10/Kotaro_CapybaraKapibarasan32.jpg",
"https://cdn.theatlantic.com/thumbor/ZAWCcyd-MwxmwvkTGp9VtFjb-h0=/900x673/media/img/photo/2018/11/photos-companionable-capybaras/c02_142762210/original.jpg",
"http://2.bp.blogspot.com/-11Ag1eF43Ok/T7DqhP75MvI/AAAAAAAAFxQ/LPpZsKkIwbY/s1600/capybara_kissing.jpg",
"https://a-z-animals.com/media/2022/01/shutterstock_1246729561.jpg",
);

function randomFotos($array, $losowe3) {
    $indRandom = array_rand($array, $losowe3);
    return$indRandom;
}

$indRandom = randomFotos($kapibarFoto, 3);
?>

<h1>KAPIBARY!!!!</h1>

<div>
    <?php
    foreach ($indRandom as $indeks) {
        echo '<img src="' . $kapibarFoto[$indeks] . '" />';
    }
    ?>
</div>
</body>
</html>
