<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Opdracht 2</title>
</head>
<body>

<form method="post">
    <label for="Getal1">Getal 1</label>
    <input type="text" name="getal1" id="getal1" required>
<br>
    <br>

    <input type="radio" name="bewerking" value="optellen"> optellen
    <input type="radio" name="bewerking" value="aftrekken"> aftrekken
    <input type="radio" name="bewerking" value="vermenigvuldigen"> vermenigvuldigen
    <input type="radio" name="bewerking" value="delen"> delen

    <br>
<br>
    <label for="Getal1">Getal 2</label>
    <input type="text" name="getal2" id="getal2" required>
<br>
    <br>

    <input type="submit" name="bereken" value="Uitrekenen">
</form>

</body>
</html>

<?php

if (isset($_POST['bereken'])){
    $getal1 = ($_POST['getal1']);
    $getal2 = ($_POST['getal2']);

    $bewerking = $_POST['bewerking'];

    $resultaat = 0;
    if ($bewerking === 'optellen') {
        $resultaat = $getal1 + $getal2;
    } elseif ($bewerking === 'aftrekken') {
        $resultaat = $getal1 - $getal2;
    } elseif ($bewerking === 'vermenigvuldigen') {
        $resultaat = $getal1 * $getal2;
    } elseif ($bewerking === 'delen') {
        if ($getal1 != 0) {
            $resultaat = $getal1 / $getal2;
        }
    }


    echo "het resultaat is:  ". $resultaat;
}







?>