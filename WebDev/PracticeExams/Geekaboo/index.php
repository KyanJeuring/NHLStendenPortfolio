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
        <section id="s1">
            <h2>Login</h2>
            <form action="./index.html" METHOD="POST">
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="fullWidth">
                <label for="password">Password:</label>
                <input type="password" name="password" class="fullWidth">
                <input type="submit" value="Login" id="login" class="fullWidth">
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
        <section id="s2">
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
        <section id="s3">
            <h2>Welcome at Geekabboo</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
        </section>
        <footer>
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
        </footer>
    </main>
</body>
</html>