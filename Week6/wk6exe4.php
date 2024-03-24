<?php
if (isset($_GET['id'])) {
    // Connect to server and select database
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'db1_gwalke01');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $id = $_GET['id']; 
    $sql = "DELETE FROM logbook WHERE name = '$id'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }

    $mysqli->close();

    header("Location: wk6ex2.php");
} else {
    echo "No ID provided.";
}
?>