<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="BasicCalculator.php" method="get">
    <input type="number" name="1stnum"> <input type="number" name="2ndnum">
    <br>
    <input type="submit">
    </form>
//edit
    Answer: <?php echo $_GET["1stnum"] + $_GET["2ndnum"] ?>
    
</body>
</html>