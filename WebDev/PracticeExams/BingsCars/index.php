<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing&apos;s Cars™</title>
    <link rel="stylesheet" href="./CSS/main.css" type="text/css">
    <link rel="stylesheet" href="./CSS/form.css" type="text/css">
    <link rel="stylesheet" href="./CSS/content.css" type="text/css">
    <link rel="shortcut icon" href="../../../Assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <a href="../../../WebDev.php">&#60;&#60; Back to WebDev Portfolio</a>
    <hr>
    <main>
        <nav>
            <div><img src="./Assets/logo.png" alt="Bing Logo"></div>
            <div>
                <ul>
                    <?php
                        $menuTexts = array("Home", "Most hired cars", "Contact");
                        $menuLinks = array("./index.php", "#", "./contact.php");
                        if (count($menuTexts) == count($menuLinks))
                        {
                            for($i = 0; $i < count($menuTexts); $i++)
                            {
                                echo "<li><a href='".$menuLinks[$i]."'>".$menuTexts[$i]."</a><li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <header>
            <div>
                <h1>Bing&apos;s Cars</h1>
                <h2>For all your special cars</h2>
            </div>
        </header>
        <div id="content">
            <h1 class="blue">Pick one of our popular cars!</h1>
            <hr>
            <div id="showCase">
                <?php
                    for($i = 0; $i <= 5; $i++):
                ?>
                    <div class="item">
                        <img src="./Assets/car1.png" alt="car">
                        <h2>Hyonda</h2>
                        <h3>&euro; 120.000</h3>
                        <p>Beautiful car that can last for years to come.</p>
                    </div>
                <?php
                    endfor;
                ?>
            </div>
            <h1>Who is Bing Cars?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis posuere nulla, quis ultrices quam sollicitudin ut. Maecenas ac arcu ullamcorper, aliquam dui vel, scelerisque turpis. Vivamus urna sem, rutrum sed arcu in, cursus dictum diam. Vestibulum bibendum vulputate magna et sagittis. Nullam nunc mauris, laoreet at eros id, maximus ullamcorper lectus. Nulla rhoncus quam eu tristique viverra. Cras risus dolor, pellentesque molestie dictum quis, blandit a augue. Cras pharetra massa ut nisi ullamcorper, ut cursus lorem dictum. Quisque vulputate orci malesuada massa porta sagittis. Aliquam sit amet dui quis ex vehicula placerat.</p>
        </div>
        <footer>
            <div>
                <p>&copy; 2022 Bing&apos;s Cars</p>
                <a href="mailto:#">Send us a direct e-mail!</a>
            </div>
            <div id="openingTimes">
                <p>Monday 13:00 - 18:00</p>
                <p>Tuesday 9:00 - 18:00</p>
                <p>Wednesday 9:00 - 18:00</p>
                <p>Thursday 9:00 - 21:00</p>
                <p>Friday 9:00 - 21:00</p>
                <p>Saturday 9:00 - 17:00</p>
            </div>
        </footer>
    </main>
</body>
</html>