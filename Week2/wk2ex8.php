<?php
$topModules[0] = "Internet Systems Development";
$topModules[1] = "Programming 1";
$topModules[2] = "Programming 2"; // Corrected quotation marks
$topModules[3] = "OOAD";
$topModules[4] = "Software Engineering";

for($count = 0; $count < 5; $count++) { // Corrected loop condition and removed extraneous semicolon
  echo "$count module is $topModules[$count] <br/>";
}
?>