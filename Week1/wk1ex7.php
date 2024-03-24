<html>
<body>
<?php
	$hourlyrate = 5.75;
	$hoursperweek = 40;
	$taxrate = 0.22; 

	$gross = $hourlyrate * $hoursperweek;
	$tax = $gross * $taxrate; 
	$net = $gross - $tax; 

	echo "Gross Wage: $" . number_format($gross) . "<br>";
	echo "Tax Amount: $" . number_format($tax) . "<br>";
	echo "Net Wage: $" . number_format($net);
?>
</body>
</html>