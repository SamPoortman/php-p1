<?php
  date_default_timezone_set ("Europe/Amsterdam");

  echo "<br>";
  $today = date ("l j F Y");
  echo "Vandaag is het: $today";

  echo "<br>";
  
  $time = date("H:i");
  echo "Het is nu: $time uur";
  
  echo "<br>";
  
  $month = date("F");
  $daysInMonth = date ("t");
  echo "deze maand, $month heeft $daysInMonth dagen";
  
  echo "<br>";
  
  $week = date("W");
  echo "Deze week is het week: $week";
?>