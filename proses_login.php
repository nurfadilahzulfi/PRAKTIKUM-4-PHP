<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses input</title>
</head>
<body>
    <?php 
        $username=$_POST["username"];
        $password=$_POST["password"];
    ?>
    username : <?php echo $username ?>
    <br>
    password : <?php echo $password ?>
    <br>
</body>
</html>