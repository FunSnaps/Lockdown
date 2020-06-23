<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SummerPhp</title>
</head>
<body>
    
    <?php
    
    $num = 5;
     
    echo $num + $num;
    echo "<p> Addition <hr>";

    echo $num - $num;
    echo "<p> Subtraction <hr>";
    
    echo $num * $num;
    echo "<p> Multiplication <hr>";

    echo $num / $num;
    echo "<p> Division <hr>";

    echo 10 % 3;
    echo "<p> Remainder or Modulus <hr>";

    echo (3 + 23) * 10;
    echo "<p> BIDMAS <hr>";
    
    $num++;
    echo $num;
    echo "<p> Increment <hr>";

    $num--;
    echo $num;
    echo "<p> Decrement <hr>";

    $num1 = 10;
    $num1 += 20;
    echo $num1;
    echo "<p> Adding something and declaring it <hr>";

    /*usinf math functions*/

    echo abs (-100);
    echo "<p> Absolute value of a number <hr>";

    echo sqrt (144);
    echo "<p> Square root of a number<hr>";

    echo pow (2, 4);
    echo "<p> raising to the power of <hr>";

    echo max (2, 10);
    echo "<p> Comparing 2 numbers (which is higher) <hr>";

    echo min (2, 10);
    echo "<p> Comparing 2 numbers (which is lower) <hr>";

    echo round (3.2);
    echo "<p> Rounding a number <hr>";

    echo ceil (3.5);
    echo "<p> will round it up no matter what <hr>";

    echo floor (3.5);
    echo "<p> will round it down no matter what <hr>";
    ?>

</body>
</html>