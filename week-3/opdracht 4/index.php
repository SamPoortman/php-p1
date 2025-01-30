<?php
$huidigeDatumTijd = date('Y-m-d H:i:s');
$huidigeDatum = date('d-m-Y');
$datumMorgen = date('Y-m-d', strtotime('+1 day'));
$datumWeekGeleden = date('Y-m-d', strtotime('-1 week'));

echo "<h1>Datum Opdrachten</h1>";
echo "<p>Opdracht A: Huidige datum en tijd: $huidigeDatumTijd</p>";
echo "<p>Opdracht B: Huidige datum (dd-mm-jjjj): $huidigeDatum</p>";
echo "<p>Opdracht C: Datum van morgen: $datumMorgen</p>";
echo "<p>Opdracht D: Datum van een week geleden: $datumWeekGeleden</p>";
?>