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
        <form action="./index.php" METHOD="POST">
            <label for="areacode">Areacode:</label>
            <input type="number" name="areacode">
            <input type="submit" value="Submit">
        </form>
        <?php
        error_reporting(0);
        
        function findAreacode($areacode, $areacodes)
        {
            $areacode = $_POST['areacode'];
            if(in_array($areacode, $areacodes))
            {
                return "Succes, the areacode $areacode is found!";
            }
            else
            {
                return "Fail, the areacode $areacode is not found!";
            }
        }
        $areacodes = array(14, 26, 12, 58, 34, 66, 7, 4);
        $areacode = $_POST['areacode'];
        echo findAreacode($areacode, $areacodes);
        ?>
    </body>
</html>