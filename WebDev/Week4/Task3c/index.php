<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 3c</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    </head>
    <body>
        <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
        <hr>
        <form action="./index.php" METHOD="POST">
            <label>How long do you want the Fibonacci sequence to be:</label>
            <input type="number" name="seqLength">
            <input type="submit" value="Submit">
        </form>
        <?php
            function fibonacci($n)
            {
                $num1 = 0;
                $num2 = 1;
                for($i = 2; ($i <= $n - 1); $i++)
                {
                    $seq[] = $num1;
                    $newNum = $num1 + $num2;
                    $num1 = $num2;
                    $num2 = $newNum;
                }
                return implode(", ", $seq);
            }

            $max = 1479;
            if(empty($_POST['seqLength']))
            {
                echo "<p>The sequence should have a length of at least 3!</p>";
            }
            else
            {
                if ($_POST['seqLength'] > $max || $_POST['seqLength'] < 3)
            {
                echo "<p>The sequence length contains numbers that cannot be calculated!<p/>";
            }
            else
            {
                echo "<p>", fibonacci($_POST['seqLength']), "</p>";
            }
            }
        ?>
    </body>
</html>