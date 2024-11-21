<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Deleted</title>
        <link rel="icon" type="image/x-icon" href="../../../Assets/favicon.ico">
        <link rel="stylesheet" href="../../CSS/main.css" type="text/css">
    </head>
    <body>
        <a href="../../../DE.php">&#60;&#60; Back to Database Engineering Portfolio</a>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["file"])) 
            {
                $file = $_GET["file"];

                if (file_exists($file)) 
                {
                    if (unlink($file)) 
                    {
                        echo "File deleted successfully!";
                    } 
                    else 
                    {
                        echo "Failed to delete the file.";
                    }
                } 
                else 
                {
                    echo "File not found.";
                }
            }
        ?>
    </body>
</html>