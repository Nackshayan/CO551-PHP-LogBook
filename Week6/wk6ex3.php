<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to server and select database
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'db1_gwalke01');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $phone_number = $_POST['txttelno'];

    $sql = "UPDATE logbook SET email = '$email', phone_number = '$phone_number' WHERE name = '$name'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

    $mysqli->close();
}
?>