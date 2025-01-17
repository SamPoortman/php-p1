<?php
// Opdracht 1: Eenvoudige rekensom
function rekensom($a, $b) {
    return $a + $b;
}

$getal1 = 5;
$getal2 = 10;
$som = rekensom($getal1, $getal2);

// Opdracht 2: Controleer of een getal even of oneven is
function isEven($getal) {
    return $getal % 2 === 0;
}

$getalTeControleren = 7;
$isEven = isEven($getalTeControleren);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Opdrachten</title>
</head>
<body>
    <h1>Resultaten van de Opdrachten</h1>

    <h2>Opdracht 1: Rekensom</h2>
    <p>De som van <?php echo $getal1; ?> en <?php echo $getal2; ?> is: <?php echo $som; ?>.</p>

    <h2>Opdracht 2: Even of Oneven</h2>
    <p>Het getal <?php echo $getalTeControleren; ?> is <?php echo $isEven ? 'even' : 'oneven'; ?>.</p>
</body>
</html>