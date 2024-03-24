<?php
$link = mysqli_connect('localhost', '22043338', 'mysqluser', 'db1_22043338');

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

echo 'Success... ' . mysqli_get_host_info($link) . "\n";

mysqli_close($link);
?>