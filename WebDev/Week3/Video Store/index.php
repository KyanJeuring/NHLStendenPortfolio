<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Store</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
</head>
<body>
    <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <form action="./index.php" METHOD="POST">
        <label for="age">Enter your age: </label>
        <input type="number" name="age" id="age">
        <label for="gender">Select your gender:</label>
        <input type="radio" name="gender" id="gender" value="M">
        <input type="radio" name="gender" id="gender" value="F">
    </form>
    <?php
        function ageChecker()
        {
            if ($_POST['age'] < 18)
            {
                echo "It looks like your to young to register";
            }
        }

        function genderChecker()
        {
            if ($_POST['gender' == "F"])
            {
                echo "There will be an upcoming ladies night event";
            }
        }
    ?>
</body>
</html>