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