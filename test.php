<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="test.php">
    <label>Number:</label>
    <input type="number" id="num" name="num">
    <input type="submit" value="Submit">   
    </form>
    <?php
    for($i=0, ($i<=$_POST["num"] - 1), $i++)
    {
        echo "*";
    }
    ?>
</body>
</html>