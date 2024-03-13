<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

// Correct foreach loop
foreach ($mymarks as $index => $value) {
  echo "for $index my grade was $value <br/>";
}

// Correctly access the array using the right quotation marks and key
echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
?>