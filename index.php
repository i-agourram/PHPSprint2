
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


    <title>PHP Sprint 2 Opdr 1</title>
</head>
<body>

<form method="post">
    <label for="bedrag">bedrag exclusief btw:</label>
    <input type="text" name="bedrag" id="bedrag" required><br>
<br>
    <label>Kies het BTW-percentage:</label><br>
    <input type="radio" name="btw_percentage" value="9"> 9% BTW<br>
    <input type="radio" name="btw_percentage" value="21"> 21% BTW<br>

    <input type="submit" name="bereken" value="Uitrekenen">
</form>





</body>
</html>

<?php

echo "<br>";
echo "<br>";

//Opdracht 1
if (isset($_POST['bereken'])) {
    $bedrag = ($_POST['bedrag']);

    $btw_percentage = ($_POST['btw_percentage']);

    $bedrag_inclusief_btw = $bedrag + $bedrag * $btw_percentage / 100;

    echo "Bedrag inclusief " . $btw_percentage . "% BTW: €" . number_format($bedrag_inclusief_btw, 2);
}









?>
