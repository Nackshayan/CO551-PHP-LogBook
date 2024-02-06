<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
    </header>
    
    <main>
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database_name";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch portfolio items from the database
        $sql = "SELECT * FROM portfolio";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='portfolio-item'>";
                echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "' />";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["description"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </main>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Portfolio</p>
    </footer>
</body>
</html>
