<!doctype HTML>
<html>
    <head>
        <title>File:switchcase.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 17/08/2022
    //Time: 00:05
    $condition = 3;

    switch ($condition)
    {
        case 1:
            $color = "blue";
            break;
        case 2:
            $color = "orange";
            break;
        case 3:
            $color = "pink";
        default:
            $color = "red";
            break;
    }

    echo $color;
    ?>
    </body>
</html>