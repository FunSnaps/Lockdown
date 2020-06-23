<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

    $friends = array("Marcus","Markus","Marc","Mark");
    echo $friends[1];

    echo "<br>";

    $friends[2] = "Bulk";
    echo $friends[2];
    
    echo "<br>";

    $friends[4] = "Sanic";
    echo $friends[4];

    echo "<br>";

    echo count ($friends);

    ?>
 

</body>
</html>