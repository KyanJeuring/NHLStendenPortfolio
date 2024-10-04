<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geekabboo</title>
    <link rel="stylesheet" href="./CSS/normalize.css" type="text/css">
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
    <link rel="shortcut icon" href="../../../Assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <a href="../../../WebDev.html">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <main>
        <header>
            <img src="./Assets/logo_geekaboo.png" alt="Geekabboo Logo">
            <ul>
                <li> <a href="./index.php">HOMEPAGE</a></li>
                <li><a href="#">REGISTER</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </header>
        <section id="bs1">
            <h2>Login</h2>
            <?php
                if($_POST['userType'] == "user")
                {
                    if($_POST['email'] != "user@user.com")
                    {
                        echo "<p><span class='errorMessage'>The e-mail address is not correct</span></p>";
                    }
                    if($_POST['password'] != "user")
                    {
                        echo "<p><span class='errorMessage'>The password is not correct</span></p>";
                    }
                }
                elseif($_POST['userType'] == "admin")
                {
                    if($_POST['email'] != "admin@admin.com")
                    {
                        echo "<p><span class='errorMessage'>The e-mail address is not correct</span></p>";
                    }
                    if($_POST['password'] != "admin")
                    {
                        echo "<p><span class='errorMessage'>The password given is not correct</span></p>";
                    }
                }
                else
                {
                    echo "ttt";
                }
                
            ?>
            <form action="./index.php" METHOD="POST">
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
                <img src="./Assets/ff.png" alt="Firefox">
                <img src="./Assets/ie.png" alt="Internet Explorer">
                <img src="./Assets/opera.png" alt="Opera">
                <img src="./Assets/safari.png" alt="Safari">
                <img src="./Assets/netscape.png" alt="Netscape">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,</p>
        </section>
        <section id="bs3">
            <h2>Welcome at Geekabboo</h2>
            <p>Lorem ipsum dobr sit amet, consectetuer adipisang dt. Aenean commodo bgula eget dolor. Aenean massa. Cum socis natoque penatibus et magns dis partunent montes, nascetur ridiculus mus. Donec quam feis, uttriöes nec, pekntesque eu, pretum qus, sem. Nula consequat massa quis enim. Donec pede justo, fringla velt abquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nulam dictum felts eu pede mob pretium. Integer tjnödunt. Cras dapibus. Wamus ekmentum semper nsi. Aenean vulputate defend telus. Aenean Jeo bgula, porttitor eu, consequat vitae, ekfend ac, enim. Abquam brem ante, dapibus in, viverra quis, feugiat a, telus. Phaselus vverra nula ut metus varius horeet.</p>
        </section>
        <footer>
            <div id="fd1">
                <section>
                    <h3>Info about Geekabboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
                <section>
                    <h3>Service at Geekabboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
                <section>
                    <h3>More about Geekabboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
                <section>
                    <h3>Warrenty at Geekabboo</h3>
                    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </section>
            </div>
            <div id="fd2">
                <p>&#169; Geekabboo 2023</p>
            </div>
        </footer>
    </main>
</body>
</html>