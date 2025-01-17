<?php
session_start();

if (isset($_SESSION['session'])) {
    $_SESSION['session'] += 1;
} else {
    $_SESSION['session'] = 1;
}

if (isset($_COOKIE['total'])) {
    $totalViews = $_COOKIE['total'] + 1;
} else {
    $totalViews = 1;
}

setcookie('total', $totalViews, time() + (365 * 24 * 60 * 60));

echo "Deze pagina heb je al: " . $_SESSION['session'] . " keer bekeken tijdens deze browsersessie.<br>";
echo "In totaal heb je deze pagina al: $totalViews keer bekeken.";
?>