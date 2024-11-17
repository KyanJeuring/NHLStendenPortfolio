<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 2</title>
    <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
    <link rel="stylesheet" href="../CSS/main.css" type="text/css">
    <link rel="stylesheet" href="../CSS/A2PHP.css" type="text/css">
</head>
<body>
    <a href="../../DatabaseEngineering.php">&#60;&#60; Back to Database Engineering Portfolio</a>
    <h1>PHP Assignment 2</h1>
    <?php
		$errors = array();
		$confirmation_message = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
            $name = $_POST["name"];
            if (strlen($name) < 2) 
            {
                $errors[] = "Name must be at least two characters.";
            }

            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $errors[] = "Invalid email address.";
            }

            $choice = $_POST["choice"];
            if ($choice !== "Student" && $choice !== "Teacher") 
            {
                $errors[] = "Select a valid option.";
            }

            $comment = $_POST["comment"];
            if (str_word_count($comment) < 5) {
                $errors[] = "Comment must have at least five words.";
            }

            $send_email = isset($_POST["send_email"]) ? "Yes" : "No";

            if (!empty($errors)) {
                echo "<div style='color: red;'>";
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo "</div>";
            }

            if (empty($errors)) 
            {
                $confirmation_message = "Form submitted successfully!<br>";
                $confirmation_message .= "Dear: " . $name . "<br>";
                $confirmation_message .= "You will post comments as " . $choice . " with the following e-mail address: " . $email . "<br>";
                $confirmation_message .= "The comment is as follows: " . $comment . "<br>";
                if ($send_email == "Yes") 
                {
                    $confirmation_message .= "All users will be notified of this.";
                }
                else
                {
                    $confirmation_message .= "All users will not be notified.";
                }
            }
            
            if (!empty($confirmation_message)) {
                echo "<h2>Confirmation</h2>";
                echo "<div>";
                echo $confirmation_message;
                echo "</div>";
            }
        }
        else
        {
    ?>

    <h2>Comment Module</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email address:</label>
        <input type="email" name="email" required><br>

        <label for="choice">Choice between Student or Teacher:</label>
        <select name="choice" required>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
        </select><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" rows="4" required></textarea><br>

        <label for="send_email">Option to send an email to all users:</label>
        <input type="checkbox" name="send_email"><br>

        <input type="submit" value="Submit">
    </form>
    <?php
        }
    ?>
</body>
</html>