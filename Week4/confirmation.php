<?php
$qty = $_POST['selqty'];
$sizePrice = $_POST['selSize'];
$total = $qty * $sizePrice;

echo "<h2> Your order qty is $qty </h2>";
echo "<h2> Selected size price: £$sizePrice </h2>";
echo "<h2> and the selected colour is " . $_POST['selcolour'] . ".</h2>";
echo "<h2> Total cost: £$total </h2>";
?>