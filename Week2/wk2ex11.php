<?php
// Define the $mymarks array with module codes as keys and marks as values
$mymarks = [
    "CS101" => 85,
    "CS102" => 78,
    "CS103" => 92,
    "CS104" => 74,
    "CS105" => 88,
    "CS106" => 95,
];

// Initialize total to 0 for summing the marks
$total = 0;

// Use a foreach loop to iterate over the $mymarks array
foreach ($mymarks as $index => $value) {
    echo "Module $index mark: $value <br/>";
    // Add the current mark to the total
    $total = $total + $value;
}
// Calculate the average mark
$average = $total / 6;

// Output the average mark
echo "<br/>The average mark is: $average";
?>