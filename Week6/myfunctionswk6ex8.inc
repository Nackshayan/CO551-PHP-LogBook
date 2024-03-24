<?php
function html_header($pageTitle)
{
    echo "<html><head><title>$pageTitle</title></head>";
    echo "<body>";
}
function html_h1($text)
{
    echo "<h1>$text</h1>";
}
function html_h2($text)
{
    echo "<h2>$text</h2>";
}
function html_footer()
{
    echo "</body>";
    echo "</html>";
}
// Tax calculating function with default rate and allownace function 
function calculatetax($salary, $rate = 40, $allowance = 0)
{
    $taxableIncome = max($salary - $allowance, 0);
    $tax = ($taxableIncome * ($rate / 100));
    return $tax;
}
?>