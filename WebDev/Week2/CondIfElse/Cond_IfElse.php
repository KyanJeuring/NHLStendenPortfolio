<!doctype HTML>
<html>
    <head>
        <title>File:Cond_IfElse.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 16/08/2022
    //Time: 22:27

    /*
     * Conditional statements take action based on their condition. If the condition is true, the accompanying code block
     * will be executed/performed. If the condition is false, the conditional statement can possibly check an upfollowing
     * condition if it is provided.
     * If none of the provided conditions have been met, the 'else' clause will be triggered and executed. If the else
     * clause is provided.
     * Semantically speaking, an else clause should always be provided. Please check the following example.
     */
    $condition = TRUE;
    if($condition){
        echo "The provided condition either contains or results in TRUE. Go ahead try to change it into FALSE.
        You can also change the condition into one using a comparison operator.";
    }
    else{
        echo "Did you change the condition to get this result? Well Done!";
    }

    // Function random_int: Generate a number between the minimum and maximum number provide. Inclusive range.
    $condition = random_int(1, 2);
    if($condition === 1){
        echo "The condition variable contains the odd number {$condition}.";
    }
    elseif($condition === 2){
        echo "The condition variable contains the even number {$condition}.";
    }
    else {
        echo "How can the condition be anything else but 1 or 2? Have you been altering the provided code?";
    }
    ?>
    </body>
</html>
