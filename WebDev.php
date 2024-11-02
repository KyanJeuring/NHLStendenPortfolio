<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDev</title>
    <link rel="icon" type="image/x-icon" href="./Assets/favicon.ico">
    <link rel="stylesheet" href="./main.css" type="text/css">
    <link rel="stylesheet" href="./navBar.css" type="text/css">
</head>

<body>
    <nav class="navBar">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./WebDev.php" class="active">WebDev</a></li>
            <li><a href="./ProfessionalSkills.html">Professional Skills</a></li>
            <li><a href="./Projects.html">Projects</a></li>
        </ul>
    </nav>
    <div>
        <h1 class="mainTitle">Portfolio WebDev</h1>
    </div>
    <main>
        <div>
        <h1>Weekly Assignments</h1>
            <?php
                $weeks = [
                    "Week 1" => 
                        [
                            "Demo Website" => "./WebDev/Week1/demo/index.php",
                            "BridgesCanals 1" => "./WebDev/Week1/Example 1/index.html",
                            "BridgesCanals 2" => "./WebDev/Week1/Example 2/index.html",
                            "BridgesCanals 3" => "./WebDev/Week1/Example 3/index.html",
                            "Find The Mistakes" => "./WebDev/Week1/FindTheMistakes/index.php",
                            "Number Sets" => "./WebDev/Week1/NumSets/index.php",
                            "Van Winteren" => "./WebDev/Week1/VanWinteren/index.php",
                            "Variable Switch" => "./WebDev/Week1/VarSwitch/index.php"
                        ],
                    "Week 2" =>
                        [
                            "Mondriaan" => "./WebDev/Week2/Mondriaan/index.html",
                            "Gallery Website" => "./WebDev/Week2/GalleryWebsite/index.html",
                            "Date Calculation" => "./WebDev/Week2/DateCalculation/index.php",
                            "Grading Table" => "./WebDev/Week2/GradingTable/index.php"
                        ],
                    "Week 3" =>
                        [
                            "Website Recreation" => "./WebDev/Week3/WebsiteRecreation/index.html",
                            "Number Comparator" => "./WebDev/Week3/Number Comparator/index.php",
                            "Nutrient List" => "./WebDev/Week3/Nutrient List/index.php",
                            "Video Store" => "./WebDev/Week3/Video Store/index.php",
                            "Sunny Side Agency" => "./WebDev/Week3/SSA/index.html"
                        ],
                    "Week 4" =>
                        [
                            "Website Recreation" => "./WebDev/Week4/WebsiteRecreation/index.html",
                            "Task 1a" => "./WebDev/Week4/Task1a/index.php",
                            "Task 1b" => "./WebDev/Week4/Task1b/index.php",
                            "Task 1c" => "./WebDev/Week4/Task1c/index.php",
                            "Task 2a" => "./WebDev/Week4/Task2a/index.php",
                            "Task 2b" => "./WebDev/Week4/Task2b/index.php",
                            "Task 3a" => "./WebDev/Week4/Task3a/index.php",
                            "Task 3b" => "./WebDev/Week4/Task3b/index.php",
                            "Task 3c" => "./WebDev/Week4/Task3c/index.php"
                        ],
                    "Week 5" =>
                        [
                            "Webinar Subscription" => "./WebDev/Week5/WebinarSubscription/index.php"
                        ],
                    "Week 6" =>
                        [
                            "Formy" => "./WebDev/Week6/formy/mylittleformy.php"
                        ],
                    "Week 8" =>
                        [
                            "Spotify" => "./WebDev/Week8/Spotify/index.php"
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
        <div>
            <h1>Practice Exams</h1>
            <ul>
                <?php
                    $practiceExams = 
                    [
                        "Geekaboo" => "./WebDev/PracticeExams/Geekaboo/index.php",
                        "Bing&apos;s Cars" => "./WebDev/PracticeExams/BingsCars/index.php"
                    ];

                    foreach ($practiceExams as $title => $link)
                    {
                        echo "<li><a href='$link'>$title</a></li>";
                    }
                ?>
            </ul>
        </div>
        <div>
            <h1>Extra Assignments</h1>
        </div>
    </main>
    <footer class="headerFooterStyle">
        <p>Contact: <a href="mailto:kyan.jeuring@student.nhlstenden.com">kyan.jeuring@student.nhlstenden.com</a></p>
        <p>&copy; Kyan Jeuring</p>
    </footer>
</body>

</html>