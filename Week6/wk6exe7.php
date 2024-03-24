<?php
include("myfunctionswk6ex7.inc");
html_header("My second function demo");
echo "I pay £ " . calculatetax(15000, 22) . " in tax with a specific rate.<br>";
echo "I pay £ " . calculatetax(15000) . " in tax using the default rate.<br>";
html_footer();
?>