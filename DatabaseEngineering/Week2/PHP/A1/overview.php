<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Assignment 1</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
        <link rel="stylesheet" href="../../CSS/main.css" type="text/css">
    </head>
    <body>
        <a href="../../../DE.php">&#60;&#60; Back to Database Engineering Portfolio</a>
        <h1>File Overview</h1>
        <h2>JPEG Files</h2>
        <?php
            $jpegFiles = glob("uploads/*.jpeg");
            echo "<table>";
            echo "<tr><th>File Name</th><th>Actions</th></tr>";
            foreach ($jpegFiles as $file)
            {
                echo "<tr><td>" . basename($file) . "</td><td><a href='delete.php?file=" . $file . "'>Delete</a></td></tr>";
            }
            echo "</table>";
        ?>
        <h2>PNG Files</h2>
        <?php
            $pngFiles = glob("uploads/*.png");
            echo "<table>";
            echo "<tr><th>File Name</th><th>Actions</th></tr>";
            foreach ($pngFiles as $file)
            {
                echo "<tr><td>" . basename($file) . "</td><td><a href='delete.php?file=" . $file . "'>Delete</a></td></tr>";
            }
            echo "</table>";
        ?>
        <h2>JPG</h2>
        <?php
            $pngFiles = glob("uploads/*.jpg");
            echo "<table>";
            echo "<tr><th>File Name</th><th>Actions</th></tr>";
            foreach ($pngFiles as $file)
            {
                echo "<tr><td>" . basename($file) . "</td><td><a href='delete.php?file=" . $file . "'>Delete</a></td></tr>";
            }
            echo "</table>";
        ?>	
        <h2>GIF</h2>
        <?php
            $pngFiles = glob("uploads/*.gif");
            echo "<table>";
            echo "<tr><th>File Name</th><th>Actions</th></tr>";
            foreach ($pngFiles as $file)
            {
                echo "<tr><td>" . basename($file) . "</td><td><a href='delete.php?file=" . $file . "'>Delete</a></td></tr>";
            }
            echo "</table>";
        ?>	
    </body>
</html>