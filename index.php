<?php
    require 'connect.php';

    $strSQL = "SELECT * FROM product";
    $objQuery = mysqli_query($con,$strSQL);
    if(!$objQuery)
{
	echo $objCon->error;
	exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>clusternamnoi</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" required autofocus>
        <br><br>
        <label for="password">Password :</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Log in">
    </form>
    <a href="user_register.php">สมัครสมาชิก</a>
</body>
</html>