<?php
$worp = rand(1, 6);
if ($worp === 6) {
    $resultaat = "Je hebt een 6 gegooid! Je wint een speciale prijs!";
} elseif ($worp >= 4) {
    $resultaat = "Je hebt een $worp gegooid! Je wint het spel!";
} else {
    $resultaat = "Je hebt een $worp gegooid! Je verliest het spel.";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobbelsteen</title>
</head>
<body>
    <h1>Dobbelsteen</h1>
    <p><?php echo $resultaat; ?></p>
</body>
</html>