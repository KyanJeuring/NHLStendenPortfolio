<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Omelette Recipe</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="icon" href="./assets/images/favicon-32x32.png" type="image/x-icon">
</head>
<body>
    <div id="mainDiv">
        <img src="./assets/images/image-omelette.jpeg" alt="Omelette Image" id="omeletteImage">
        <h1>Simple Omelette Recipe</h1>
        <p>An easy and quick dish, perfect for any meal. This classic omelette combines beaten eggs cooked for perfection, optionally filled with your own cheese, vegetables, or meats.</p>
        <div class="subDiv">
            <h3>Preparation time</h3>
            <ul>
                <li><b>Total:</b> Approximately 10 minutes</li>
                <li><b>Preparation:</b> 5 minutes</li>
                <li><b>Cooking:</b> 5 minutes</li>
            </ul>
        </div>
        <h2>Ingredients</h2>
        <ul>
            <li>2-3 large eggs</li>
            <li>Salt, to taste</li>
            <li>Pepper, to taste</li>
            <li>1 tablespoon of butter or oil</li>
            <li>Optional fillings: cheese, diced vegetables, cooked meats, herbs</li>
        </ul>
        <hr>
        <h2>Instructions</h2>
        <ol>
            <li><b>Beat the eggs:</b> In a bowl, beat the eggs with a pinch of salt and pepper until They are well mixed. You can add a tablespoon of water or milk for a fluffier texture.</li>
            <li><b>Heat the pan:</b> Place a non-stick frying pan over medium heat and add butter or oil.</li>
            <li><b>Cook the omelette:</b> Once the butter is melted and bubbling, pour in The eggs. Tilt the pan to ensure the eggs evenly coat the surface.</li>
            <li><b>Add fillings &#40;Optional&#41;:</b> When the eggs begin to set at the edges but are still slightly runny in the middle, sprinkle your chosen fillings over one half of the omelette.</li>
            <li><b>Fold and serve:</b> As the omelette continues to cook, carefully lift one edge and fold it over The fillings. Lef if cook for another minute, then slide if onto a plate.</li>
            <li><b>Enjoy:</b> Serve hot, with additional salt and pepper if needed.</li>
        </ol>
        <hr>
        <h2>Nutrition</h2>
        <p>The table below shows nutritional values per serving without the additional fillings.</p>
        <table>
            <tr>
                <td class="tableColum1">Calories</td>
                <td class="tableColum2"><b>277kcal</b></td>
            </tr>
            <tr></tr>
                <td class="tableColum1">Carbs</td>
                <td class="tableColum2"><b>0g</b></td>
            </tr>
            <tr>
                <td class="tableColum1">Protein</td>
                <td class="tableColum2"><b>20g</b></td>
            </tr>
            <tr>
                <td class="tableColum1">Fat</td>
                <td class="tableColum2"><b>22g</b></td>
            </tr>
        </table>
        <div class="subDiv">
        <form action="index.php" METHOD="POST">
            <label>Number:</label>
            <input type="number" id="num" name="num">
            <input type="submit" value="Submit">
        </form>
            <?php
                error_reporting(0);
                function compareToHundred($num) {
                    if ($num > 100) {
                        return "<p>The number $num is greater than 100.\n</p>";
                    } elseif ($num < 100) {
                        return "<p>The number $num is less than 100.\n</p>";
                    } else {
                        return "<p>The number $num is equal to 100.\n</p>";
                    }
                }
                $num = $_POST["num"];
                if(isset($num))
                {
                    echo compareToHundred($num);
                }
                else
                {
                    echo "<p>Please input a number to compare it to 100.</p>";
                }

                function d($calories, $carbs, $protein, $fat, $dietApproved)
                {

                }
            ?>
        </div>
    </div>
</body>
</html>