<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="" method="Post">
    <input id="name" name="username" type="text">
    <input name="submit" type="submit" value="save session">
    </form>
    <?php
        if (isset($_POST['submit'])) 
        {
         $_SESSION['username'] =$username;

            }
    ?>

    
    </body>
</html>
