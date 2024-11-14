<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geekaboo</title>
    <link rel="stylesheet" href="./CSS/normalize.css" type="text/css">
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
    <link rel="shortcut icon" href="../../../Assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $uType = filter_input(INPUT_POST, 'userType');
            $uEmail = strtolower(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
            $uPass = filter_input(INPUT_POST, 'password');

            function getUsernameFromEmail($uEmail)
            {
                $parts = explode("@", $uEmail);
                return $parts[0];
            }

            $uName = getUsernameFromEmail($uEmail);
            $uNameModified = ucfirst($uName);
            $uNameModified[strlen($uNameModified) - 1] = strtoupper($uNameModified[strlen($uNameModified) - 1]);
        }
    ?>
    <a href="../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <main>
        <header>
            <img src="./Assets/logo_geekaboo.png" alt="Geekaboo Logo">
            <ul>
                <li><a href="./index.php">HOMEPAGE</a></li>
                <li><a href="#">REGISTER</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="./index.php" style="display: none;" id="showLink"><?php echo "LOGOUT " . strtoupper($uName);?></a></li>
            </ul>
        </header>
        <section id="bs1">
            <h2 class="hideOnLogin">Login</h2>
            <?php
                $cssFile = "./CSS/hideShow.css";
                if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    if(empty($uType))
                    {
                        echo "<p><span class='errorMessage'>Please select an user type!</span></p>";
                    }
                    if(empty($uEmail))
                    {
                        echo "<p><span class='errorMessage'>Please provide an email!</span></p>";
                    }
                    if(empty($uPass))
                    {
                        echo "<p><span class='errorMessage'>Please provide an password!</span></p>";
                    }
                    else
                    {
                        if($uType == "user")
                        {
                            if($uEmail != "user@user.com")
                            {
                                echo "<p><span class='errorMessage'>The e-mail address is not correct</span></p>";
                            }
                            if($uPass != "user")
                            {
                                echo "<p><span class='errorMessage'>The password is not correct</span></p>";
                            }
                            else
                            {
                                echo "<h2 class='welcomeMessage'>Welcome, ". $uNameModified . "</h2>";
                                echo "<link rel='stylesheet' href='" . $cssFile . "'>";
                                echo "<script>document.getElementById('showLink').style.display='block';</script>";
                            }
                        }
                        elseif($uType == "admin")
                        {
                            if($uEmail != "admin@admin.com")
                            {
                                echo "<p><span class='errorMessage'>The e-mail address is not correct</span></p>";
                            }
                            if($uPass != "admin")
                            {
                                echo "<p><span class='errorMessage'>The password given is not correct</span></p>";
                            }
                            else
                            {
                                echo "<h2 class='welcomeMessage'>Welcome, ". $uNameModified . "</h2>";
                                echo "<link rel='stylesheet' href='" . $cssFile . "'>";
                                echo "<script>document.getElementById('showLink').style.display='block';</script>";
                            }
                        }
                    }
                }
            ?>
            <form action="./index.php" METHOD="POST" class="hideOnLogin">
                <label for="email">Email Address:</label>
                <input type="email" name="email">
                <label for="password">Password:</label>
                <input type="password" name="password">
                <input type="submit" value="Login" id="submit" name="submit">
                <div class="radio">
                    <input type="radio" name="userType" id="user" value="user">
                    <label for="userType">User</label>
                    <input type="radio" name="userType" id="admin" value="admin">
                    <label for="userType">Admin</label>
                </div>
                <a href="#">Forgot password?</a>
                <a href="#">Register</a>
            </form>
        </section>
        <section id="bs2">
            <h2>Browsers</h2>
            <p>We create websites for:</p>
            <div class="browserImages">
                <?php
                $browserType = array("ff", "ie", "opera", "safari", "netscape");
                foreach($browserType as $browser)
                {
                    echo "<img src='./Assets/" . $browser . ".png' alt='". $browser. "'/>";
                }
                ?>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,</p>
        </section>
        <section id="bs3">
            <h2>Welcome at Geekaboo</h2>
            <p>Lorem ipsum dobr sit amet, consectetuer adipisang dt. Aenean commodo bgula eget dolor. Aenean massa. Cum socis natoque penatibus et magns dis partunent montes, nascetur ridiculus mus. Donec quam feis, uttriöes nec, pekntesque eu, pretum qus, sem. Nula consequat massa quis enim. Donec pede justo, fringla velt abquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nulam dictum felts eu pede mob pretium. Integer tjnödunt. Cras dapibus. Wamus ekmentum semper nsi. Aenean vulputate defend telus. Aenean Jeo bgula, porttitor eu, consequat vitae, ekfend ac, enim. Abquam brem ante, dapibus in, viverra quis, feugiat a, telus. Phaselus vverra nula ut metus varius horeet.</p>
        </section>
        <footer>
            <div id="fd1">
                <section>
                    <h3>Info about Geekaboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
                <section>
                    <h3>Service at Geekaboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
                <section>
                    <h3>More about Geekaboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
                <section>
                    <h3>Warrenty at Geekaboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
            </div>
            <div id="fd2">
                <p>&#169; Geekaboo 2023</p>
            </div>
        </footer>
    </main>
</body>
</html>