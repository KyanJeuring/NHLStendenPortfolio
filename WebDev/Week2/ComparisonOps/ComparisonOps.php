<!doctype HTML>
<html>
    <head>
        <title>File:ComparisonOps.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 17/08/2022
    //Time: 22:50

    //Comparison Operators

    //Equal == - check for contents of value. True if equal, False if not. Does not check datatype.
    $foo = 7;
    if($foo == 7){}
        //TRUE

    //Identical (or strict equal) === - check for contents of value. True if equal, False if not. Does check for datatype.
    $foo = 7;
    if($foo === '7'){}
        //FALSE

    //Not equal != - check for contents of value. True if not equal, Fale if equal. Does not check for datatype.
    $foo = 5;
    if($foo != 6){}
        //TRUE

    //Not identical (or not strict equal) !== - check for contents of value. True if not equal, False if equal. Does check for datatype.
    $foo = False;
    if($foo !== TRUE){}        //False

    //Less than < - Check if left operand is less than right operand. True if left is less, False if left is equal or greater.
    $foo = 16;
    if($foo < 16){}
        //TRUE

    //Less than or equal to <= - Check if left operand is less than or equal to right operand. True if left is less or equal,,
    //False if left is equal or greater.
    $foo = 16;
    if($foo <= 32){}
        //FALSE

    //Greater than > - Check if left operand is greater than right operand. True if left is greater, False if left is equal or less.
    $foo = 4;
    if($foo > 17){}
        //FALSE

    //Greater than or equal to >= - Check if left operand is greater than or equal to right operand. True if left is greater or equal,
    //False if left is less.
    $foo = 4;
    if($foo >= 44){}
        //TRUE
    ?>
    </body>
</html>
