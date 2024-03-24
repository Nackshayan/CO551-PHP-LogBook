<html>
<head><title>Select Size Page</title></head>
<body>
    <form action="selectcolour.php" method="post">
        Select the size of the widgets you are ordering:
        <select name="selSize">
            <option value="15.75">Small</option>
            <option value="16.75">Medium</option>
            <option value="17.75">Large</option>
            <option value="18.75">Extra large</option>
        </select>
        <br/><br/>
        <!-- Hidden field for passing quantity -->
        <input type="hidden" name="selqty" value="<?php echo $_POST['selqty']; ?>" />
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>