<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="GetandPost.php" method="post">

    Password: <input type="password" name="password"> 
    Pin: <input type="number" name="pin">
    <input type="submit">
    <br>
    </form>
    <hr>

    <?php 
    
    echo $_POST["password"];
    echo"<br>";
    echo $_POST["pin"]; 
    
    ?>
    
</body>
</html>