<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SummerPhp</title>
</head>
<body>
    
    <?php
    
    $stringType = "Pride and prejudice";

    echo strtoupper ("<p>$stringType</p>");       // examples of string functions
    echo strtolower ("<p>$stringType</p>");      
    echo strlen ("$stringType");                  // this function shows the length of the string
    echo "<p>$stringType[0]</p>";                 // prints out whatever is in the chosen index from the string
    
    echo $stringType[2] = "u";                    // reassigning a characher from the string by its index 
    echo ("<p>$stringType</p>");
    
    echo str_replace ("Prude", "Gluttony", $stringType); // this function lets the user change a string of character into another from a variable 
    echo ("<p>$stringType</p>");
    echo substr("$stringType", 9, 4);             // takes a variable and and starting from index 9 take the next 4 characters
    echo "<hr>"

    ?>

</body>
</html>