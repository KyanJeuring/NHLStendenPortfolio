<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Switch</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
</head>
<body>
    <?php
        $left = 5;
        $right = 7;
        echo "left: $left, right: $right";
        echo "<br>";
        $left = $left + $right;
        $right = $left - $right;
        $left = $left - $right;
        echo "left: $left, right: $right";
    ?>
</body>
</html>