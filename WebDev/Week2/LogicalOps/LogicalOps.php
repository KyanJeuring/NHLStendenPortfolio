<!doctype HTML>
<html>
    <head>
        <title>File:LogicalOps.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 17/08/2022
    //Time: 23:47

    $foo = 0;
    $bar = 1;

    //Logical Operators

    //Logical AND (can be replaced with &&) - both conditions need to be met in order to result in a TRUE.
    //Difference between AND and && can be found in Operator Precedence. https://www.php.net/manual/en/language.operators.precedence.php
    if($foo == 0 AND $bar == 1){}

    //Logical OR (can be replaced with ||) - only 1 of the conditions have to be met in order to result in a TRUE.
    //Difference between OR and || can be found in Operator Precedence. https://www.php.net/manual/en/language.operators.precedence.php
    if($foo == 0 || $bar == 1){}

    //Logical XOR - only 1 of the conditions have to be met in order to result in a TRUE. However if both conditions are met
    //it will result in a FALSE.
    if($foo == 0 XOR $bar == 1){}

    //Logical ! (pronounced NOT) - will invert the result of the condition. TRUE will become False, and vice versa.
    //Can be used in correlation with functions that result TRUE or FALSE.
    if(!$foo){}

    ?>
    </body>
</html>
