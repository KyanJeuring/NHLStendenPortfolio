<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Calculation</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
</head>
<body>
    <a href="../../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <?php
    error_reporting(0);
        $date = 14062016;
        $day = ($date / 1000000) % 31;
        $month = ($date / 10000) % 100;
        $year = $date % 10000;
        echo "Day:", $day, "\n";
        echo "Month:", $month, "\n";
        echo "Year:", $year, "\n";
    ?>
</body>
</html>