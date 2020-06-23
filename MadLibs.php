<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="MadLibs.php" method="get">

    Colour: <input type="text" name="colour">
    <br>
    Plural Noun: <input type="text" name="pluralNoun">
    <br>
    Insult: <input type="text" name="insult">
    <br>
    Name: <input type="text" name="Pname">
    <br>
    <input type="submit">
    </form>

    <br><br>

    <?php    
    $name = $_GET["Pname"];
    $colour = $_GET["colour"];
    $pluralNoun = $_GET["pluralNoun"];
    $insult = $_GET["insult"];
    
    echo "Roses are $colour<br>";
    echo "$pluralNoun are blue <br>";
    echo "$name is a/an $insult<br>";
    
    ?>

</body>
</html>