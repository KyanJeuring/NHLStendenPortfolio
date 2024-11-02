<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing&apos;s Cars&trade;</title>
    <link rel="stylesheet" href="./CSS/main.css" type="text/css">
    <link rel="stylesheet" href="./CSS/form.css" type="text/css">
    <link rel="stylesheet" href="./CSS/content.css" type="text/css">
    <link rel="shortcut icon" href="../../../Assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <a href="../../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <main>
        <nav>
            <div><img src="./Assets/logo.png" alt="Bing Logo"></div>
            <div>
                <ul>
                    <?php
                        $menuTexts = array("Home", "Most hired cars", "Contact");
                        $menuLinks = array("./index.php", "#", "./contact.php");
                        if (count($menuTexts) == count($menuLinks))
                        {
                            for($i = 0; $i < count($menuTexts); $i++)
                            {
                                echo "<li><a href='".$menuLinks[$i]."'>".$menuTexts[$i]."</a><li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <header>
            <div>
                <h1>Bing&apos;s Cars</h1>
                <h2>For all your special cars</h2>
            </div>
        </header>
        <div id="content">
            <?php
                if($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $fname = filter_input(INPUT_POST, 'fname');
                    $lname = filter_input(INPUT_POST, 'lname');
                    $selectCar = filter_input(INPUT_POST, "selectCar");
                    $carType = filter_input(INPUT_POST, "carType");
                    $options = filter_input(INPUT_POST, "options");
                    $insurance = filter_input(INPUT_POST, 'insurance');

                    if(empty($fname) || empty($lname) || empty($selectCar) || empty($carType) || empty($options) || empty($insurance))
                    {
                        echo "<h1 class='blue'>Request a car</h1>";
                        echo "<hr>";
                        echo "<p class='errorMessage'>Please provide all necessary information</p>";
                    }
                    elseif(str_word_count($options) < 5)
                    {
                        echo "<h1 class='blue'>Request a car</h1>";
                        echo "<hr>";
                        echo "<p class='errorMessage'>The options field must contain at least 5 words.</p>";
                    }
                    else
                    {
                        echo "<h1 class='blue'>Thank you</h1>";
                        echo "<hr>";
                        echo "<div id='overview'>";
                        echo "<p><strong>Firstname: </strong>".$fname."</p>";
                        echo "<p><strong>Last name: </strong>".$lname."</p>";
                        echo "<p><strong>Car brand &amp; model: </strong>".$selectCar."&nbsp;".$carType."</p>";
                        echo "<p><strong>Options: </strong>".strtoupper($options)."</p>";
                        echo "<p><strong>Do you want insurance? </strong>".$insurance."</p>";
                        echo "</div>";
                    }
                    
                }
                else
                {
            ?>
            <h1 class="blue">Request a car</h1>
            <hr>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <label for="fname">Firstname</label>
                <input type="text" name="fname" id="firstName">
                <label for="lname">Lastname</label>
                <input type="text" name="lname" id="LastName">
                <p>Car brand &amp; model</p>
                <div id="selects">
                    <select name="selectCar" id="selectCar">
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                    </select>
                    <select name="carType" id="carType">
                        <option value="Hatchback">Hatchback</option>
                        <option value="Cabrio">Cabrio</option>
                    </select>
                </div>
                <label for="options">Options</label>
                <textarea name="options" id="options" placeholder="If you want any extra options, add them here..."></textarea>
                <p id="insuranceLabel">Do you want insurance?</p>
                <div>
                    <input type="radio" name="insurance" id="insurance" value="Yes">
                    <label for="insurance" id="insurance">Yes</label>
                </div>
                <div>
                    <input type="radio" name="insurance" id="insurance" value="No">
                    <label for="insurance" id="insurance">No</label>
                </div>
                <input type="submit" value="Sent request" id="submit">
            </form>
            <?
                }
            ?>
        </div>
        <footer>
            <div>
                <p>&copy; 2022 Bing&apos;s Cars</p>
                <a href="mailto:#">Send us a direct e-mail!</a>
            </div>
            <div id="openingTimes">
                <p>Monday 13:00 - 18:00</p>
                <p>Tuesday 9:00 - 18:00</p>
                <p>Wednesday 9:00 - 18:00</p>
                <p>Thursday 9:00 - 21:00</p>
                <p>Friday 9:00 - 21:00</p>
                <p>Saturday 9:00 - 17:00</p>
            </div>
        </footer>
    </main>
</body>
</html>