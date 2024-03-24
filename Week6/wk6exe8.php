<?php
include("myfunctionswk6ex8.inc");
html_header("My tax calculation with allowance");

// salary, tax rate, and tax allowance
$salary = 15000;
$taxRate = 22; 
$taxAllowance = 12500; 

echo "With a salary of £$salary, a tax rate of $taxRate%, and a tax allowance of £$taxAllowance <br>";
echo "So the tax I pay is £" . calculatetax($salary, $taxRate, $taxAllowance) . ".<br>";
html_footer();
?>