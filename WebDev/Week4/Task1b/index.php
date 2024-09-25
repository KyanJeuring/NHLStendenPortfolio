<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 1a</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    </head>
    <body>
        <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
        <hr>
        <?php
        $colorWheel = array("Red", "Red", "Orange", "Orange", "Yellow", "Green", "Blue", "Pink");

        function outputColor()
        {
            global $colorWheel;
            echo $colorWheel[rand(0, count($colorWheel)-1)];
        }
        outputColor();
        ?>
    </body>
</html>