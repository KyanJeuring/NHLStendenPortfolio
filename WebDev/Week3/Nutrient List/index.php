<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrient List</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    <link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
    <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <form action="./index.php" METHOD="POST">
        <div id="d1">
            <label for="calories"><strong>Calories:</strong></label>
            <input type="number" name="calories" id="calories">
            <label for="carbs"><strong>Carbs:</strong></label>
            <input type="number" name="carbs" id="carbs">
            <label for="protein"><strong>Proteins:</strong></label>
            <input type="number" name="protein" id="protein">
            <label for="fat"><strong>Fat:</strong></label>
            <input type="number" name="fat" id="fat">
        </div>
            <div id="d2">
            <p>Diet Approved?</p>
            <label for="dietApproved">Yes</label>
            <input type="radio" name="dietApproved" id="dietApproved" value=1>
            <label for="dietApproved">No</label>
            <input type="radio" name="dietApproved" id="dietApproved" value=0>
            <input type="submit" name="submit" value="submit" id="submit">
        </div>
    </form>
    <?php
        error_reporting(0);
        function generateNutrientsList($calories, $carbs, $protein, $fat, $dietApproved)
        {
            echo "<table>";
            echo "<tr class='tableBottomBorder'><th>Calories:</th><td>$calories kcal</td></tr>";
            echo "<tr class='tableBottomBorder'><th>Carbs:</th><td>$carbs g</td></tr>";
            echo "<tr class='tableBottomBorder'><th>Proteins:</th><td>$protein g</td></tr>";
            echo "<tr class='tableBottomBorder'><th>Fat:</th><td>$fat g</td></tr>";
            echo "<tr class='tableBottomBorder'><th>Diet status:</th><td>", ($dietApproved ? "Approved" : "Disapproved"), "</td></tr>";
            echo "</table>";
        }

        
        if(isset($_POST["submit"]))
        {
            generateNutrientsList($_POST["calories"], $_POST["carbs"], $_POST["protein"], $_POST["fat"], $_POST["dietApproved"]);
        }
    ?>
    </table>
</body>
</html>