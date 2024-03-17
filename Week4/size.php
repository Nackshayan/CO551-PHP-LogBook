<html>
<head>
    <title>Select Size Page</title>
</head>
<body>
    <form action="selectcolour.php" method="post">
        Select the size for the widgets you are ordering
        <select name="selsize">
            <option value="15.75">Small (£15.75)</option>
            <option value="16.75">Medium (£16.75)</option>
            <option value="17.75">Large (£17.75)</option>
            <option value="18.75">Extra Large (£18.75)</option>
        </select>
        <br/><br/>
        <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>">
        <input type="submit" value="Select Colour"/>
    </form>
</body>
</html>