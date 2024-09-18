<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Sets</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
</head>
<body>
    <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <?php
        $set1 = [6, 4, 4, 1];
        $result1 = (6-1)*4+4 ;
        var_dump($set1);
        echo "(6-1)*4+4 = ";
        echo $result1;
        echo "\n";
        $set2 = [8, 2, 6, 1];
        $result2 = (8 / 2) * (6 / 1);
        var_dump($set2);
        echo "(8 / 2) * (6 / 1) = ";
        echo $result2;
        echo "\n";
        $set3 = [6, 8, 8, 2];
        var_dump($set3);
        echo "6+8+8+2 = ";
        $result3 = 6+8+8+2;
        echo $result3;
    ?> 
</body>
</html>