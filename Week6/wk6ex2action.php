<?php
// Connect to server and select database
$mysqli = new mysqli('127.0.0.1', 'root', '', 'db1_gwalke01');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$row = ['name' => '', 'phone_number' => '', 'email' => ''];
if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM logbook WHERE name = '$id'";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
    } else {
        echo "No record found.";
    }
} 
$mysqli->close();
?>
<html>
<body>
<form action="wk6ex3.php" method="post">
Name:
<input type="text" name="txtname" value="<?php echo $row['name']; ?>" />
<br>
Phone number:
<input type="text" name="txttelno" value="<?php echo $row['phone_number']; ?>" />
<br>
Email:
<input type="text" name="txtemail" value="<?php echo $row['email']; ?>" />
<br>
<input type="submit" name="btnsubmit" value="save"/>
</form>
</body>
</html>