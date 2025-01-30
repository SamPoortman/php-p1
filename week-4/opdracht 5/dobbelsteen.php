<?php $getal = rand(1,6);
if($getal > 3){
    echo "Je hebt gewonnen!";
}
else{
    echo "Je hebt verloren";
}
?>

<?php
$hour = date("H");

echo match (true) {
    $hour >= 6 && $hour < 12 => "Het is ochtend.",
    $hour >= 12 && $hour < 18 => "Het is middag.",
    $hour >= 18 && $hour < 24 => "Het is avond.",
    default => "Het is nacht.",
};
?>