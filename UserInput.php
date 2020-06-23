<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action ="UserInput.php" method = "get">       
    Name: <input type="text" name="Username">
    <br>
    Age: <input type="number" name="Userage">
    <br>
    <input type="submit"> <input type="reset">
    
</form>
<br>

Your username is: <?php echo $_GET["Username"] ?>
<br> 
Your age is: <?php echo $_GET["Userage"] ?> 


</body>
</html>