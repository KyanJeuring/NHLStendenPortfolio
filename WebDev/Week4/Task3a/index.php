<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 2b</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    </head>
    <body>
        <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
        <hr>
        <?php
        error_reporting(0);
        echo "Shape 1";
        echo "<br>";
        for ($i = 0; $i < 10; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "Shape 2";
        echo "<br>";
        for ($i = 0; $i <= 3; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                echo "*";
            }
        }
        echo "<br>";
        echo "Shape 3";
        echo "<br>";
        ?>
    </body>
</html>