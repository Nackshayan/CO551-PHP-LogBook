<?php
// Connect to server and select database
$mysqli = new mysqli('127.0.0.1', 'root', '', 'db1_gwalke01');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM logbook";
$result = $mysqli->query($sql);
?>
<html>
<body>
<?php
while ($row = $result->fetch_assoc()) {
    echo "<a href=\"wk6ex2action.php?id={$row['name']}\">{$row['name']}</a>";
    echo " | <a href=\"wk6exe4.php?id={$row['name']}\">Delete</a><br>";
}
$mysqli->close();
?>
</body>
</html>