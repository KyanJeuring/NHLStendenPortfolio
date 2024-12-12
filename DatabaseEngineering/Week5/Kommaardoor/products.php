<?php
    session_start();

    require_once ('./config/dbconfig.php');

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
            <h1>Product Management</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Manager Products</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <section class="mainContent">
        <h1>Our products</h1>
        <div id="productContainer">
            <?php
                if($dbHandler)
                {
                    if($dbHandler)
                    {
                        try
                        {
                            $stmt = $dbHandler->prepare("SELECT * FROM products");
                            $stmt->execute();
                        }
                        catch(Exception $ex) {
                            echo $ex;
                        }
                    }
                }
                if(isset($stmt))
                {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        ?>
                        <div class="card">
                            <h2><?php echo $row['productname']?></h2>
                            <img src="<?php echo $row['image_url']?>">
                            <a class="infoBtn" href="#"><?php echo $row['short_description']?></a>
                        </div>
                        <?php
                    }
                    $stmt -> closeCursor();
                }
            ?> 
        </div>
    </section>
</body>
</html>