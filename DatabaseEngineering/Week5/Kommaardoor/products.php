<?php
    session_start();

    require_once('./config/dbconfig.php');

/*     if (!isset($_SESSION['email'])) {
        header('Location: login.php');
        exit();
    } */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <title>Product Management</title>
</head>
<body>
    <div id="container">
        <header>
            <div id="logo">
                <img src="img/logo.png">
                <h1>Kommaardoor</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section class="mainContent">
            <h1>Our products</h1>
            <div id="productContainer">
                <?php
                    include('./items.php');
                ?> 
            </div>
        </section>
        <footer class="blueBackground">
                <div>
                    <div class="footerSection">
                        <h3>Contact</h3>
                        <ul>
                            <li>Something</li>
                            <li>Something</li>
                            <li>Something</li>
                            <li>Something</li>
                        </ul>
                    </div>
                    <div class="footerSection">
                        <h3>About us</h3>
                        <ul>
                            <li>Something</li>
                            <li>Something</li>
                            <li>Something</li>
                            <li>Something</li>
                        </ul>
                    </div>
                    <div class="footerSection">
                        <h3>Legal</h3>
                        <ul>
                            <li>Something</li>
                            <li>Something</li>
                            <li>Something</li>
                            <li>Something</li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
</body>
</html>