<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="shortcut icon" href="../../../Assets/favicon.ico" type="icon">
    </head>
    <body>
        <?php
            class content
            {
                public $contentTitle;
                public $contentSubtitle;
                public $contentId;
                public function __construct($contentTitle, $contentSubtitle, $contentId)
                {
                    $this->contentTitle = $contentTitle;
                    $this->contentSubtitle = $contentSubtitle;
                    $this->contentId = $contentId;
                }
            }
        ?>
        <main>
            <header>
                <div id="left"><a href="../../WebDev.php"><img src="./Assets/spotifyLogo.svg" alt="Logo" id="spotifyLogo"></a></div>
                <div id="center">
                    <div id="homeIcon"><img src="./Assets/homeIcon.svg" alt="Home"></div>
                    <div id="search">
                        <div>
                            <img src="./Assets/searchIcon.svg" alt="Search">
                            <input type="text" placeholder="What do you want to play?">
                        </div>
                        <div>
                            <div id="searchVerticalLine"></div>
                            <img src="./Assets/browseIcon.svg" alt="Browse">
                        </div>
                    </div>
                </div>
                <div id="right">
                    <button id="signupBtn"><h3>Sign up</h3></button>
                    <button id="loginBtn"><h3>Login</h3></button>
                </div>
            </header>
            <aside>
                <div id="asideHeader">
                    <div>
                        <img src="./Assets/libraryIcon.svg" alt="Library">
                        <h3>Your Library</h3>
                    </div>
                    <img src="./Assets/plusIcon.svg" alt="Plus">
                </div>
                <div class="asideContent">
                    <h3>Create your first playlist</h3>
                    <p>It's easy, we'll help you.</p>
                    <button>Create playlist</button>
                </div>
                <div class="asideContent">
                    <h3>Let's find some podcasts to follow</h3>
                    <p>We'll keep you updated on new episodes</p>
                    <button>Browse podcasts</button>
                </div>
                <div id="asideMaliciousContent">
                    <div>
                        <a href="#" class="normalLink">Legal</a>
                        <a href="#" class="normalLink">Safety & Privacy Center</a>
                        <a href="#" class="normalLink">Privacy Policy</a>
                        <a href="#" class="normalLink">Cookie Settings</a>
                        <a href="#" class="normalLink">About Ads</a>
                        <a href="#" class="normalLink">Accessibility</a>
                    </div>
                    <a href="#" class="specialLink">Cookies</a>
                    <button><img src="./Assets/languageIcon.svg" alt="language">English</button>
                </div>
            </aside>
            <div id="content">
                <div>
                    <div class="contentHeader"><h2>Popular artists</h2><h4>Show All</h4></div>
                    <div class="carousel">
                        <?php
                            $contents = 
                            [
                                new content('Lady Gaga', 'Artist', 'LadyG'),
                                new content('Coldplay', 'Artist', 'ColdP'),
                                new content('David Guetta', 'Artist', 'DavidG'),
                                new content('Billie Eilish', 'Artist', 'BillieE'),
                                new content('Roxy Dekker', 'Artist', 'RoxyD'),
                                new content('The Weekend', 'Artist', 'TheW'),
                                new content('Lost Frequencies', 'Artist', 'LostF')
                            ];
                            foreach($contents as $content)
                            {
                                echo "<div class='cards'>";
                                echo "<img class='pictures circle' src='./Assets/Artists/" . $content->contentId . ".png' alt='" . $content->contentTitle . "'>";
                                echo "<h3>".$content->contentTitle."</h3>";
                                echo "<p>".$content->contentSubtitle."</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>            
                <div>
                    <div class="contentHeader"><h2>Popular albums</h2><h4>Show All</h4></div>
                    <div class="carousel">
                        <?php
                            $contents = 
                            [
                                new content('HIT ME HARD AND SOFT', 'Billie Eilish', 'HMHAS'),
                                new content('Short n&apos; Sweet', 'Sabrina Carpenter', 'SNS'),
                                new content('Die With A Smile', 'Lady Gaga, Bruno Mars', 'DWAS'),
                                new content('Fireworks &amp; Rollerblades', 'Benson Boone', 'FAR'),
                                new content('Terug In De Tijd', 'Yves Berendse', 'TIDT'),
                                new content('I&apos;ve Tried Everything But...', 'Teddy Swims', 'ITEB'),
                                new content('Ushuaia', 'Turfy Gang, Russo', 'USHU')
                            ];
                            foreach($contents as $content)
                            {
                                echo "<div class='cards'>";
                                echo "<img class='pictures' src='./Assets/Albums/" . $content->contentId . ".png' alt='" . $content->contentTitle . "'>";
                                echo "<h3>".$content->contentTitle."</h3>";
                                echo "<p>".$content->contentSubtitle."</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <div class="contentHeader"><h2>Popular radio</h2><h4>Show All</h4></div>
                    <div class="carousel">
                        <?php
                            $contents = 
                            [
                                new content('', 'With Harry Styles, Maroon 5, Bruno...', ''),
                                new content('', 'With Sam Smith, Bruno Mars, Lady...', ''),
                                new content('', 'With Simple Red, Al Green, Three Sacre...', ''),
                                new content('', 'With Olivia Rodrigo, Madison...', ''),
                                new content('', 'With Bankzitters, FLEMMING, Turfy...', ''),
                                new content('', 'With Benson Boone, Myles...', ''),
                                new content('', 'With Maroon 5, One Direction, Kat...', ''),
                            ];
                            foreach($contents as $content)
                            {
                                echo "<div class='cards'>";
                                echo "<img class='pictures' src='./Assets/Radios/" . $content->contentId . ".png' alt='" . $content->contentTitle . "'>";
                                echo "<h3>".$content->contentTitle."</h3>";
                                echo "<p>".$content->contentSubtitle."</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>            
                <div>
                    <div class="contentHeader"><h2>Featured Charts</h2><h4>Show All</h4></div>
                    <div class="carousel">
                        <?php
                            $contents = 
                            [
                                new content('', 'Your weekly update of the mos...', ''),
                                new content('', 'Your weekly update of the mos...', ''),
                                new content('', 'Your daily update of the most playe...', ''),
                                new content('', 'Your daily update of the most playe...', ''),
                                new content('', 'Your daily update of the most viral...', ''),
                                new content('', 'Your daily update of the most viral...', ''),
                            ];
                            foreach($contents as $content)
                            {
                                echo "<div class='cards'>";
                                echo "<img class='pictures' src='./Assets/Charts/" . $content->contentId . ".png' alt='" . $content->contentTitle . "'>";
                                echo "<h3>".$content->contentTitle."</h3>";
                                echo "<p>".$content->contentSubtitle."</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>            
                <div>
                    <div class="contentHeader"><h2>Playlists from our Editors</h2><h4>Show All</h4></div>
                    <div class="carousel">
                        <?php
                            $contents = 
                            [
                                new content('', 'The most interesting tracks ...', ''),
                                new content('', 'The very best in new music from...', ''),
                                new content('', 'The best new electronic music...', ''),
                                new content('', 'The best new rock tracks every week', ''),
                                new content('', 'The newest r&b drops, every wee...', ''),
                                new content('', 'Today&apos;s top Latin hits, elevando', ''),
                                new content('', 'the beat of your drift', '')
                            ];
                            foreach($contents as $content)
                            {
                                echo "<div class='cards'>";
                                echo "<img class='pictures' src='./Assets/Playlists/" . $content->contentId . ".png' alt='" . $content->contentTitle . "'>";
                                echo "<h3>".$content->contentTitle."</h3>";
                                echo "<p>".$content->contentSubtitle."</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <footer>
                <div>
                    <h4>Preview of Spotify</h4>
                    <p>Sign up to get unlimited songs and podcasts with occasional ads. No credit card needed.</p>
                </div>
                <button><h3>Sign up free</h3></button>
            </footer>
        </main>
    </body>
</html>