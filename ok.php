<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    Write username <br>    
    <input type="text" name="username"><br>
    <input type="submit" name="submit" >

</form>
    
</body>
</html>

<?php
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            echo"HELLO ";
        } 
?>