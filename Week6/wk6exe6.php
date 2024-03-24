<?php
include("myfunctionswk6ex6.inc");

$salary = 15000; // £15,000 salary
$taxRate = 20; // 20% tax rate

// Calculate the tax
$tax = calculatetax($salary, $taxRate);

echo "The calculated tax on a salary of £$salary at a $taxRate% tax rate";
echo "<br>";
echo " That tax you need pay is £$tax";
?>