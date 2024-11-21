<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Upload Page</title>
        <link rel="stylesheet" href="../../CSS/main.css" type="text/css">
        <link rel="stylesheet" href="../CSS/main.css" type="text/css">
    </head>
    <body>
        <a href="../../../DE.php">&#60;&#60; Back to Database Engineering Portfolio</a>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if (isset($_FILES["file"]))
                {
                    $file = $_FILES["file"];

                    // Check file type
                    $allowedExtensions = array("png", "jpeg", "jpg", "gif");
                    $fileExtension = pathinfo($file["name"], PATHINFO_EXTENSION);

                    if (!in_array($fileExtension, $allowedExtensions)) 
                    {
                        die("Invalid file type. Allowed formats are: .png, .jpeg, .jpg, .gif.");
                    }

                    // Check file size
                    if ($file["size"] > 3 * 1024 * 1024) 
                    { // 3MB
                        die("File is too large. Max file size is 3MB.");
                    }

                    // Check filename
                    if (strlen($file["name"]) > 50 || !preg_match('/[A-Z]/', $file["name"])) 
                    {
                        die("Invalid filename. Filename must be no longer than 50 characters and contain at least 1 uppercase letter.");
                    }

                    // Move the uploaded file to a designated folder
                    $uploadPath = "uploads/";
                    $newFilename = $file["name"];
                    $destination = $uploadPath . $newFilename;

                    if (move_uploaded_file($file["tmp_name"], $destination)) 
                    {
                        echo "File uploaded successfully!";
                    }
                    else
                    {
                        echo "File upload failed.";
                    }
                }
                else
                {
                    echo "No file uploaded.";
                }
            }
        ?>
    </body>
</html>