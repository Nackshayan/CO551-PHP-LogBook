<?php
$mymarks = [
    "CS101" => 85,
    "CS102" => 78,
    "CS103" => 92,
    "CS104" => 74,
    "CS105" => 88,
    "CS106" => 95,
];
$total = 0;

foreach ($mymarks as $index => $value) {
    echo "Module $index mark: $value <br/>";
    $total = $total + $value;
}
$average = $total / 6;

echo "<br/>The average mark is: $average";
?>