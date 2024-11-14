<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDev</title>
    <link rel="icon" type="image/x-icon" href="./Assets/favicon.ico">
    <link rel="stylesheet" href="../CSS/main.css" type="text/css">
    <link rel="stylesheet" href="../CSS/navBar.css" type="text/css">
</head>

<body>
    <nav class="navBar">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../WebDev/WebDev.php" class="active">WebDev</a></li>
            <li><a href="../DatabaseEngineering/DatabaseEngineering.php">DE</a></li>
            <li><a href="../ProfessionalSkills/ProfessionalSkills.html">Professional Skills</a></li>
        </ul>
    </nav>
    <div>
        <h1 class="mainTitle">Portfolio WebDev</h1>
    </div>
    <main>
        <div>
        <h1>Weekly Assignments</h1>
            <?php
                $weeks =
                [
                    "Week 1" => 
                    [
                        "Demo Website" => "./Week1/demo/index.php",
                        "BridgesCanals 1" => "./Week1/Example 1/index.html",
                        "BridgesCanals 2" => "./Week1/Example 2/index.html",
                        "BridgesCanals 3" => "./Week1/Example 3/index.html",
                        "Find The Mistakes" => "./Week1/FindTheMistakes/index.php",
                        "Number Sets" => "./Week1/NumSets/index.php",
                        "Van Winteren" => "./Week1/VanWinteren/index.php",
                        "Variable Switch" => "./Week1/VarSwitch/index.php"
                    ],
                    "Week 2" =>
                    [
                        "Mondriaan" => "./Week2/Mondriaan/index.html",
                        "Gallery Website" => "./Week2/GalleryWebsite/index.html",
                        "Date Calculation" => "./Week2/DateCalculation/index.php",
                        "Grading Table" => "./Week2/GradingTable/index.php"
                    ],
                    "Week 3" =>
                    [
                        "Website Recreation" => "./Week3/WebsiteRecreation/index.html",
                        "Number Comparator" => "./Week3/Number Comparator/index.php",
                        "Nutrient List" => "./Week3/Nutrient List/index.php",
                        "Video Store" => "./Week3/Video Store/index.php",
                        "Sunny Side Agency" => "./Week3/SSA/index.html"
                    ],
                    "Week 4" =>
                    [
                        "Website Recreation" => "./Week4/WebsiteRecreation/index.html",
                        "Task 1a" => "./Week4/Task1a/index.php",
                        "Task 1b" => "./Week4/Task1b/index.php",
                        "Task 1c" => "./Week4/Task1c/index.php",
                        "Task 2a" => "./Week4/Task2a/index.php",
                        "Task 2b" => "./Week4/Task2b/index.php",
                        "Task 3a" => "./Week4/Task3a/index.php",
                        "Task 3b" => "./Week4/Task3b/index.php",
                        "Task 3c" => "./Week4/Task3c/index.php"
                    ],
                    "Week 5" =>
                    [
                        "Webinar Subscription" => "./Week5/WebinarSubscription/index.php"
                    ],
                    "Week 6" =>
                    [
                        "Formy" => "./Week6/formy/mylittleformy.php"
                    ],
                    "Week 8" =>
                    [
                        "Spotify" => "./Week8/Spotify/index.php"
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
                        "Geekaboo" => "./PracticeExams/Geekaboo/index.php",
                        "Bing&apos;s Cars" => "./PracticeExams/BingsCars/index.php"
                    ];

                    foreach ($practiceExams as $title => $link)
                    {
                        echo "<li><a href='$link'>$title</a></li>";
                    }
                ?>
            </ul>
        </div>
    </main>
</body>

</html>