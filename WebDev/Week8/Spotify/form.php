<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="./CSS/form.css">
        <link rel="shortcut icon" href="../../../Assets/favicon.ico" type="icon">
    </head>
    <body>
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
            <div>
                <!-- IN THE EXAM!! -->
                <h1>Form</h1>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        function validateInput()
                        {
                            $error = "";
                            $name = filter_input(INPUT_POST, 'name');
                            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                            $TOS = filter_input(INPUT_POST, 'TOS');
                            $commentTitle = filter_input(INPUT_POST, 'commentTitle');
                            $comment = filter_input(INPUT_POST, 'comment');
                        
                            if(empty($name))
                            {
                                $error = "<p class='errorMessage'>Please provide your name!</p>";
                            }
                            if(empty($email))
                            {
                                $error =  "<p class='errorMessage'>Please provide your email!</p>";
                            }
                            if(empty($TOS))
                            {
                                $error =  "<p class='errorMessage'>Please read the Terms of Service!</p>";
                            }
                            if(empty($commentTitle))
                            {
                                $error = "<p class='errorMessage'>Please provide a comment titel!</p>";
                            }
                            if(empty($comment))
                            {
                                $error = "<p class='errorMessage'>Please provide a comment!</p>";
                            }
                            return $error;
                        }
                        validateInput();
                    }
                    else
                    {
                    ?>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" id="form">
                            <div>
                                <label for="name">Username:</label>
                                <input type="text" name="name" placeholder="Username">
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div>
                                <label for="TOS">I have read the terms of service:</label>
                                <input type="checkbox" name="TOS">
                            </div>
                            <label for="commentTitle">Title of comment:</label>
                            <input type="text" name="commentTitle" placeholder="Title">
                            <label for="comment">Comment:</label>
                            <textarea name="comment" placeholder="Your comment"></textarea>
                            <div>
                                <label for="gender">Male</label>
                                <input type="radio" name="gender" id="male">
                                <label for="gender">Female</label>
                                <input type="radio" name="gender" id="female">
                            </div>
                            <input type="submit" value="submit">
                        </form>
                        <?php
                    }
                    ?>
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