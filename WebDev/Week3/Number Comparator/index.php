<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Comparator</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
</head>
<body>
    <a href="../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <form action="./index.php" METHOD="POST">
        <label>Number:</label>
        <input type="number" id="num" name="num">
        <input type="submit" value="Submit">
    </form>
    <?php
        error_reporting(0);
        function compareToHundred($num) {
            if ($num > 100) {
                return "<p>The number $num is greater than 100.\n</p>";
            } elseif ($num < 100) {
                return "<p>The number $num is less than 100.\n</p>";
            } else {
                return "<p>The number $num is equal to 100.\n</p>";
            }
        }

        if(isset($_POST["num"]))
        {
            echo compareToHundred($_POST["num"]);
        }
        else
        {
            echo "<p>Please input a number to compare it to 100.</p>";
        }
    ?>
</body>
</html>