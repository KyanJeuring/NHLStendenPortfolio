<!doctype HTML>
<html>
    <head>
        <title>File:Cond_IfElseNest.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 16/08/2022
    //Time: 23:23

    /*
     * Nested If-Else statements allow you to build a 'roadmap' of choices made based on 1 or more than 1 condition.
     * Observe the following example.
     */
    $name = "Gerjan van Oenen";
    $subject = "Project Webdevelopment and Design";

    if($name === "Rob Smit"){
        echo "Mr. Smit ";
        if($subject === "Webdevelopment"){
            echo "will be teaching Webdevelopment for today!";
        }
        else{
            echo " appears to have many talents besides teaching Webdevelopment";
        }
    }
    else{
        echo "{$name} ? ";
        if($subject === "Project Webdevelopment and Design"){
            echo ",oh the one from {$subject}? He's okay I guess.";
        }
        else{
            echo "Wait, who? No sorry, no idea who that is.";
        }
    }
    ?>
    </body>
</html>
