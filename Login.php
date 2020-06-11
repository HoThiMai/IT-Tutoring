//Sử dụng session hiển thị tên đăng nhập của người dùng 
<?php
session_start();
error_reporting();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <h1>Hi <?php echo $_POST["username"];?></h1>
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

</body>
</html>
