<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'db1_gwalke01');

if ($_FILES['monsterimage']['error'] == 0 && $_FILES['monsteraudio']['error'] == 0) {
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];

    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

    $sql = "INSERT INTO monster (name, image, audio) VALUES ('" . addslashes($_POST['txtname']) . "', '$imagedata', '$audiodata');";

    $result = mysqli_query($db, $sql);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($db);
    }
} else {
    echo "Error in file upload.";
}

mysqli_close($db);
?>