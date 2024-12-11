<?php
$expire = time() + 10*60;

if(empty($_COOKIE["bgColour"]) || empty($_COOKIE["font"]) || empty($_COOKIE["fontSize"]))
{
    setcookie("bgColour", "White", $expire);
    setcookie("font", "Times New Roman", $expire);
    setcookie("fontSize", 12, $expire);
}

$err = [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["bgColour"]))
    {
        $err[] = "No colour posted";
    }
    if(empty($_POST["fontFamily"]))
    {
        $err[] = "No font posted";
    }
    if(empty($_POST["fontSize"]))
    {
        $err[] = "No colour posted";
    }

    if(count($err) == 0)
    {
        $bgcolour = filter_input(INPUT_POST, "bgColour", FILTER_SANITIZE_SPECIAL_CHARS);
        $font = filter_input(INPUT_POST, "fontFamily", FILTER_SANITIZE_SPECIAL_CHARS);
        $fontSize = filter_input(INPUT_POST, "fontSize", FILTER_SANITIZE_SPECIAL_CHARS);

        setcookie("bgColour", $bgcolour, $expire);
        setcookie("font", $font, $expire);
        setcookie("fontSize", $fontSize, $expire);

        header("Location:".htmlspecialchars($_SERVER['PHP_SELF']));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Assignment 2</title>
        <link rel="stylesheet" href="../../CSS/main.css" type="text/css">
        <link rel="stylesheet" href="../A2/CSS/main.css" type="text/css">
        <style>
            body
            {
                background-color: <?= filter_input(INPUT_COOKIE, "bgColour", FILTER_SANITIZE_SPECIAL_CHARS); ?>;
                font-family: "<?= filter_input(INPUT_COOKIE, "font", FILTER_SANITIZE_SPECIAL_CHARS); ?>";
                font-size: <?= filter_input(INPUT_COOKIE, "fontSize", FILTER_SANITIZE_SPECIAL_CHARS); ?>px;
            }
            form
            {
                display: flex;
                flex-direction: column;
                width: 400px;
            }
        </style>
    </head>
    <body>
        <h1>Cookie settings page</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <h2>Background Colour</h2>
            <div id="colour">
                <input type="radio" name="bgColour" value="blue" checked> Blue
                <input type="radio" name="bgColour" value="green"> Green
                <input type="radio" name="bgColour" value="orange"> Orange
                <input type="radio" name="bgColour" value="rebeccapurple"> Rebeccapurple
            </div>
            <h2>Font</h2>
            <div id="font">
                <select name="fontFamily" id="fontSelect">
                    <option value="times">Times new roman</option>
                    <option value="arial">Arial</option>
                    <option value="comic sans ms">Comic Sans MS</option>
                    <option value="wingdings">Wingdings</option>
                </select>
            </div>
            <h2>Font size</h2>
            <input type="range" name="fontSize"  min="10" max="24" value="12" step="2">
            <input type="submit" name="submit" value="apply">
        </form>
    </body>
</html>