<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 1a</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    </head>
    <body>
        <a href="../../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
        <hr>
        <?php
        $areacodes = array(14, 26, 12, 58, 34, 66, 7, 4);

        function findHighestNumber($areacodes)
        {
            $highestNumber = max($areacodes);
            echo "The highest number is: ". $highestNumber;
        }

        findHighestNumber($areacodes);
        ?>
    </body>
</html>