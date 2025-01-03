<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Assignment 1</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
        <link rel="stylesheet" href="../CSS/main.css" type="text/css">
        <link rel="stylesheet" href="../CSS/A1PHP.css" type="text/css">
    </head>
    <body>
        <a href="../../DE.php">&#60;&#60; Back to Database Engineering Portfolio</a>
        <h1>PHP Assignment 1</h1>
        <?php
            $distances =
            [
                "Berlin" =>
                [
                    "Berlin" => 0,
                    "Moscow" => 1607.99,
                    "Paris" => 876.96,
                    "Prague" => 280.34,
                    "Rome" => 1181.67
                ],
                "Moscow" =>
                [
                    "Berlin" => 1607.99,
                    "Moscow" => 0,
                    "Paris" => 2484.92,
                    "Prague" => 1664.04,
                    "Rome" => 2374.26
                ],
                "Paris" =>
                [
                    "Berlin" => 876.96,
                    "Moscow" => 2484.92,
                    "Paris" => 0,
                    "Prague" => 885.38,
                    "Rome" => 1105.76
                ],
                "Prague" =>
                [
                    "Berlin" => 280.34,
                    "Moscow" => 1664.04,
                    "Paris" => 885.38,
                    "Prague" => 0,
                    "Rome" => 922
                ],
                "Rome" =>
                [
                    "Berlin" => 1181.67,
                    "Moscow" => 2374.26,
                    "Paris" => 1105.76,
                    "Prague" => 922,
                    "Rome" => 0
                ]
            ];

            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $city1 = $_POST['city1'] ?? null;
                $city2 = $_POST['city2'] ?? null;

                if ($city1 && $city2)
                {
                    $distance = $distances[$city1][$city2];
                    echo "<p>The distance between ".$city1." and ".$city2." is ".$distance." kilometers.</p>";
                } else
                {
                    echo "<p>Please select both cities.</p>";
                }
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div>
                <label for="city1">Select first city:</label>
                <select name="city1" id="city1">
                    <?php
                        foreach ($distances as $city => $values)
                        {
                            echo "<option value=".$city.">".$city."</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="city2">Select second city:</label>
                <select name="city2" id="city2">
                    <?php
                        foreach ($distances as $city => $values)
                        {
                            echo "<option value=".$city.">".$city."</option>";
                        }
                    ?>
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>