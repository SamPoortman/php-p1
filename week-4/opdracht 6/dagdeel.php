<?php

$hour = date("H");

  if ($hour >= 6 && $hour < 12) {
    echo "Het is ochtend.";
} 
elseif ($hour >= 12 && $hour < 18) {
    echo "Het is middag.";
}
elseif ($hour >= 18 && $hour < 24) {
    echo "Het is avond.";
} 
else {
    echo "Het is nacht.";
}
?>