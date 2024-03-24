<html>
<head><title>Select Colour Page</title></head>
<body>
    <form action="confirmation.php" method="post">
        Select the colour for the <?php echo $_POST['selqty']; ?> widget(s) you are ordering:
        <select name="selcolour">
            <option value="white">white</option>
            <option value="red">red</option>
            <option value="yellow">yellow</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
        </select>
        <br/><br/>
        <!-- Hidden field for passing quantity -->
        <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>" />
        <!-- Hidden field for passing selected size and its price -->
        <input type="hidden" name="selSize" value="<?php echo $_POST['selSize']; ?>" />
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>