<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Engineering</title>
    <link rel="icon" type="image/x-icon" href="../Assets/favicon.ico">
    <link rel="stylesheet" href="../CSS/main.css" type="text/css">
    <link rel="stylesheet" href="../CSS/navBar.css" type="text/css">
</head>

<body>
    <?php
        class Assignments
        {
            public $title;
            public $link;
            public $class;
            public function __construct($title, $link, $class)
            {
                $this->title = $title;
                $this->link = $link;
                $this->class = $class;
            }
        }
    ?>
    <nav class="navBar">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../WebDev/WebDev.php">WebDev</a></li>
            <li><a href="../DatabaseEngineering/DE.php" class="active">DE</a></li>
            <li><a href="../ObjectOrientedProgramming/OOP.php">OOP</a></li>
            <li><a href="../Dataprocessing/DP.php">DP</a></li>
            <li><a href="../SoftwareQuality/SQ.php">SQ</a></li>
            <li><a href="../AppDev/AppDev.php">AppDev</a></li>
            <li><a href="../Projects/Projects.html">Projects</a></li>
            <li><a href="../ProfessionalSkills/PS.html">PS</a></li>
        </ul>
    </nav>
    <div>
        <h1 class="mainTitle">Portfolio Database Engineering</h1>
    </div>
    <main>
        <div id="explanation" onclick="alert('Explanation of the colors.\nBlack &equals; Unselected\nColored &equals; Ready to select\nYellow &equals; Work in progress &#40;WIP&#41;\nRed &equals; Not started yet &#40;NSY&#41;\n\nIf there are any questions about the portfolio you can mail to:\nkyanjeuring@gmail.com')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3l58.3 0c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24l0-13.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1l-58.3 0c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
		</div>
        <div>
        <h1>Weekly Assignments</h1>
            <?php
                $weeks = 
                [
                    "Week 1" => 
                    [
                        new Assignments("Assignment 1", "./Week1/HTML/A1.html", ""),
                        new Assignments("Assignment 2", "./Week1/HTML/A2.html", ""),
                        new Assignments("Assignment 3", "./Week1/HTML/A3.html", ""),
                        new Assignments("Assignment 4", "./Week1/HTML/A4.html", ""),
                        new Assignments("PHP Assignment 1", "./Week1/PHP/A1.php", ""),
                        new Assignments("PHP Assignment 2", "./Week1/PHP/A2PHP/A2Form.php", "WIPMessage"),
                    ],
                ];

                foreach ($weeks as $week => $assignments)
                {
                    echo "<details>";
                    echo "<summary class='summaryTitle'>$week</summary>";
                    echo "<ul>";
                    foreach ($assignments as $assignment)
                    {
                        echo "<li><a href='$assignment->link' class='$assignment->class'>$assignment->title</a></li>";
                    }
                    echo "</ul>";
                    echo "</details>";
                }
            ?>
        </div>
    </main>
</body>

</html>