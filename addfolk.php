<?php
session_start();
?>
<?php

echo "ยินดีต้อนรับคุณ". $_SESSION["type"];
// Check Login
if($_SESSION["type"] == ''){
  echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
} else if($_SESSION['type'] != "S"){
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
} else
{
?>

<h1>Shop Page</h1>
<a href="logout.php" class="btn btn-primary">logout</a>
<?php
}
 ?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่ม Shop</title>
</head>
<body>
    <h1>ลงทะเบียนร้านค้า</h1>
    
    <form action="folk_register.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
        <label><input type="file" name="fileupload" id="fileupload"  required="required"/></label>
        <br>
        <label for="username">Username : </label>
        <input type="text" name="username" required autofocus>
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" required>
        <br>
        <label for="username">ชื่อ-สกุล : </label>
        <input type="text" name="name" required>
        <br>
        <label for="phone">เบอร์โทรศัพท์ : </label>
        <input name="phone" required>
        <br>
        <br><br>
        <input type="submit" value="ยืนยัน">
    </form>
    <br><br>
    <a href="index.php">กลับหน้าหลัก</a>
</body>
</html>