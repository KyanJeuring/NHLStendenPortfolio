<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Engineering</title>
    <link rel="icon" type="image/x-icon" href="./Assets/favicon.ico">
    <link rel="stylesheet" href="../CSS/main.css" type="text/css">
    <link rel="stylesheet" href="../CSS/navBar.css" type="text/css">
</head>

<body>
    <nav class="navBar">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../WebDev/WebDev.php">WebDev</a></li>
            <li><a href="../DatabaseEngineering/DatabaseEngineering.php" class="active">DE</a></li>
            <li><a href="../ProfessionalSkills/ProfessionalSkills.html">Professional Skills</a></li>
        </ul>
    </nav>
    <div>
        <h1 class="mainTitle">Portfolio Database Engineering</h1>
    </div>
    <main>
        <div>
        <h1>Weekly Assignments</h1>
            <?php
                $weeks =
                [
                    "Week 1" => 
                    [
                        "Assignment 1" => "./Week1/A1.html",
                        "Assignment 2" => "./Week1/A2.html",
                        "Assignment 3" => "./Week1/A3.html",
                        "Assignment 4" => "./Week1/A4.html",
                        "PHP Assignment 1" => "./Week1/A1.php"
                    ]
                ];

                foreach ($weeks as $week => $assignments)
                {
                    echo "<details>";
                    echo "<summary class='summaryTitle'>$week</summary>";
                    echo "<ul>";
                    foreach ($assignments as $title => $link)
                    {
                        echo "<li><a href='$link'>$title</a></li>";
                    }
                    echo "</ul>";
                    echo "</details>";
                }
            ?>
        </div>
    </main>
</body>

</html>