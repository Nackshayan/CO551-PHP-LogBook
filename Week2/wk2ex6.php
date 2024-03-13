<?php
$marks[0] = 65;
$marks[3] = 55;
$marks[] = 76; // This will automatically take the next available integer key, which is 4 in this case.

echo "Index 0 = $marks[0] <br/>";
echo "Index 1 = $marks[1] <br/>"; // Added the missing semicolon here
echo "Index 2 = $marks[2] <br/>"; // Corrected the quotation marks
echo "Index 3 = $marks[3] <br/>";
echo "Index 4 = $marks[4] <br/>"; // Corrected the quotation marks
// Removed Index 5 as it doesn't exist in your array and would produce a notice.
?>