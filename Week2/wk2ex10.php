<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

echo "<table border='1'>";
echo "<tr><th>Year</th><th>Grade</th></tr>"; 

foreach ($mymarks as $index => $value) {
  echo "<tr><td>$index</td><td>$value</td></tr>"; 
}
echo "</table>"; 
echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
?>
