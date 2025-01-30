<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
</head>
<body>
    <?php
    if (isset($_SESSION["username"])) {
        echo "<h2>Welkom, " . htmlspecialchars($_SESSION["username"]) . "!</h2>";
    } else {
        echo "<h2>U moet zich registreren.</h2>";
        echo "<p><a href='index.html'>Terug naar registratie</a></p>";
    }
    ?>
</body>
</html>
