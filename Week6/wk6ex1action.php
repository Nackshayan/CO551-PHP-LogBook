<?php

// Create connection
$conn = mysqli_connect('127.0.0.1', 'root', '', 'db1_gwalke01');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlInsert = "INSERT INTO logbook (name, email, phone_number) VALUES ('".$_POST['txtName']."', '".$_POST['txtEmail']."', '".$_POST['txtPhoneNumber']."')";

if (!mysqli_query($conn, $sqlInsert)) {
    echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
}

$sqlSelect = "SELECT * FROM logbook";
$result = mysqli_query($conn, $sqlSelect);

while($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . " " . $row["email"] . " " . $row["phone_number"] . "<br/>";
}
mysqli_close($conn);
?>