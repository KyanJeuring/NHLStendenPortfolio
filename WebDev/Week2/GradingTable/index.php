<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading Table</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
</head>
<body>
    <a href="../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <form action="index.php" METHOD="POST">
        <label for="grade">Grade:</label>
        <input style="width:50px;" type="number" name="grade">
        <input type="submit" value="Submit">
    </form>
    <?php
    error_reporting(0);
    $grade = $_POST["grade"];
    if(isset($grade))
    {
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
    }
    else
    {
        echo "Enter a grade to see how good it is.";
    }
    ?>
</body>
</html>