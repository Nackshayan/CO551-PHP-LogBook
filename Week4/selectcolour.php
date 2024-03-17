<html>
<head>
    <title>Select Colour Page</title>
</head>
<body>
    <form action="confirmation.php" method="post">
        Select the colour for the <?php echo ($_POST['selqty']); ?> widgets you are ordering:
        <select name="selcolour">
            <option value="white">white</option>
            <option value="red">red</option>
            <option value="yellow">yellow</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
        </select>
        <br/><br/>
        
        <input type="hidden" name="selqty" value="<?php echo ($_POST['selqty']); ?>">
        <input type="hidden" name="selsize" value="<?php echo ($_POST['selsize']); ?>">
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>
