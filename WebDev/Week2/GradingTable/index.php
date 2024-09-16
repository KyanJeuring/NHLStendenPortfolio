<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading Table</title>
</head>
<body>
    <form action="index.php" METHOD="POST">
        <label for="grade">Grade:</label>
        <input type="number" id="grade" name="grade"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $grade = $_POST["grade"];

    echo "<h3>Using the if/else structure</h3>";

    if ($grade >= 1 && $grade <= 3)
    {
        echo "<p>A\n", $grade, "\nis very bad!</p>";
    }
    elseif ($grade == 4 || $grade == 5)
    {
        echo "<p>A\n", $grade, "\n is insufficient!</p>";
    }
    elseif ($grade == 6 || $grade == 7)
    {
        echo "<p>A\n", $grade, "\n is sufficient!</p>";
    }
    elseif ($grade == 8)
    {
        echo "<p>A\n", $grade, "\n is good!</p>";
    }
    elseif ($grade == 9)
    {
        echo "<p>A\n", $grade, "\n is very good!</p>";
    }
    elseif ($grade == 10)
    {
        echo "<p>A\n", $grade, "\n is excellent!</p>";
    }
    else
    {
        echo "<p>A\n", $grade, "\n is an invalid figure</p>";
    }

    echo "<h3>Using the switch case structure</h3>";

    switch($grade)
    {
        case 1:
            echo "<p>A\n", $grade, "\nis very bad!</p>";
            break;
        case 2:
            echo "<p>A\n", $grade, "\nis very bad!</p>";
            break;
        case 3:
            echo "<p>A\n", $grade, "\nis very bad!</p>";
            break;
        case 4:
            echo "<p>A\n", $grade, "\n is insufficient!</p>";
            break;
        case 5:
            echo "<p>A\n", $grade, "\n is insufficient!</p>";
            break;
        case 6:
            echo "<p>A\n", $grade, "\n is sufficient!</p>";
            break;
        case 7:
            echo "<p>A\n", $grade, "\n is sufficient!</p>";
            break;
        case 8:
            echo "<p>A\n", $grade, "\n is good!</p>";
            break;
        case 9:
            echo "<p>A\n", $grade, "\n is very good!</p>";
            break;
        case 10:
            echo "<p>A\n", $grade, "\n is excellent!</p>";
            break;
        default:
            echo "<p>A\n", $grade, "\n is an invalid figure</p>";
            break;

    }
    ?>
</body>
</html>