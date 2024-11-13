<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Engineering</title>
    <link rel="icon" type="image/x-icon" href="./Assets/favicon.ico">
    <link rel="stylesheet" href="./main.css" type="text/css">
    <link rel="stylesheet" href="./navBar.css" type="text/css">
</head>

<body>
    <nav class="navBar">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./WebDev.php">WebDev</a></li>
            <li><a href="./DatabaseEngineering.php" class="active">Database Engineering</a></li>
            <li><a href="./ProfessionalSkills.html">Professional Skills</a></li>
            <li><a href="./Projects.html">Projects</a></li>
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
                        "Assignment 1" => "./DatabaseEngineering/Week1/A1.txt",
                        "Assignment 2" => "./DatabaseEngineering/Week1/A2.txt",
                        "Assignment 3" => "./DatabaseEngineering/Week1/A3.txt",
                        "Assignment 4" => "./DatabaseEngineering/Week1/A4.txt",
                        "PHP Assignment 1" => "./DatabaseEngineering/Week1/A1.php"
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
    <footer class="headerFooterStyle">
        <p>Contact: <a href="mailto:kyan.jeuring@student.nhlstenden.com">kyan.jeuring@student.nhlstenden.com</a></p>
        <p>&copy; Kyan Jeuring</p>
    </footer>
</body>

</html>