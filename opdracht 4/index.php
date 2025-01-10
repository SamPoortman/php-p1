<?php
// Opdracht A: Huidige datum en tijd
$huidigeDatumTijd = date('Y-m-d H:i:s');

// Opdracht B: Huidige datum in een ander formaat
$huidigeDatum = date('d-m-Y');

// Opdracht C: Datum van morgen
$datumMorgen = date('Y-m-d', strtotime('+1 day'));

// Opdracht D: Datum van een week geleden
$datumWeekGeleden = date('Y-m-d', strtotime('-1 week'));

// Toon de resultaten op het scherm
echo "<h1>Datum Opdrachten</h1>";
echo "<p>Opdracht A: Huidige datum en tijd: $huidigeDatumTijd</p>";
echo "<p>Opdracht B: Huidige datum (dd-mm-jjjj): $huidigeDatum</p>";
echo "<p>Opdracht C: Datum van morgen: $datumMorgen</p>";
echo "<p>Opdracht D: Datum van een week geleden: $datumWeekGeleden</p>";
?>