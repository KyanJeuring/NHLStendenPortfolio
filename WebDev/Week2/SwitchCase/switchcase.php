<!doctype HTML>
<html>
    <head>
        <title>File:switchcase.php</title>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 17/08/2022
    //Time: 00:05
    $color = "blue";

    switch ($color)
    {
        case "blue":
            $color = "1";
            break;
        case "orange":
            $color = "orange";
            break;
        case "pink":
            $color = "pink";
        default:
            $color = "red";
            break;
    }

    echo $color;
    ?>
    </body>
</html>