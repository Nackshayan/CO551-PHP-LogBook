<?php
session_start();
$qty = $_POST['selqty'];
$size = $_POST['selsize'];
$color = $_POST['selcolour'];

switch ($size) {
    case '15.75':
        $price = 15.75;
        $sizeText = "Small";
        break;
    case '16.75':
        $price = 16.75;
        $sizeText = "Medium";
        break;
    case '17.75':
        $price = 17.75;
        $sizeText = "Large";
        break;
    case '18.75':
        $price = 18.75;
        $sizeText = "Extra Large";
        break;
}

$total = $qty * $price; 

echo "<h2>Your order:</h2>";
echo "<p>Quantity: " . $qty . "</p>";
echo "<p>Size: " . $sizeText . " (£" . $price . " each)</p>";
echo "<p>Colour: " . $color . "</p>";
echo "<h2>Total cost: £" . number_format($total, 2) . "</h2>";
?>