<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Van Winteren</title>
    <link rel="icon" type="image/x-icon" href="../../Assets/favicon.ico">
</head>
<body>
    <?php
    $name = "Van Winteren";
    $vanWinteren_age = 33;
    $collecting_objects_years = 4;

    echo "<p>Mr. $name, $vanWinteren_age years old, has been collecting special objects for the past
    $collecting_objects_years years. $name currently has $vanWinteren_age cars, " 
    . $vanWinteren_age + $collecting_objects_years . " horses and " . $vanWinteren_age - $collecting_objects_years .
    " rare musical instruments. The rarest instrument in Van Winteren's
    possession is a " . $vanWinteren_age * $collecting_objects_years . "-year-old guitar.
    His favorite horse is Bensley, the " . round($vanWinteren_age / $collecting_objects_years) . " year old stallion.
    </p>";
    ?>
</body>
</html>