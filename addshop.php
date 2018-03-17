<?php
session_start();
?>
<?php

echo "ยินดีต้อนรับคุณ". $_SESSION["type"];
// Check Login
if($_SESSION["type"] == ''){
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
} else if($_SESSION['type'] != "A"){
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
} else
{
?>

<a href="admin.php"><h1>Admin</h1></a>
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
    
    <form action="shop_register.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
        <label><input type="file" name="fileupload" id="fileupload"  required="required"/></label>
        <br>
        <label for="username">Username(ชื่อร้าน) : </label>
        <input type="text" name="username" required autofocus>
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" required>
        <br>
        <label for="address">ที่อยู่ : </label>
        <textarea name="address" required></textarea>
        <br>
        <label for="district">ตำบล : </label>
        <input type="text" name="district" required>
        <br>
        <label for="amphur">อำเภอ : </label>
        <input type="text" name="amphur" required>
        <br>
        <label for="province">จังหวัด : </label>
        <input type="text" name="province" required>
        <br>
        <label for="post">รหัสไปรษณีย์ : </label>
        <input name="post" required>
        <br>
        <label for="phone">เบอร์โทรศัพท์ : </label>
        <input name="phone" required>
        <br>
        <label for="province">latitude : </label>
        <input type="text" name="latitude" required>
        <br>
        <label for="province">longitude : </label>
        <input type="text" name="longitude" required>
        <br>
        <br><br>
        <input type="submit" value="ยืนยัน">
    </form>
    <br><br>
    <a href="index.php">กลับหน้าหลัก</a>
</body>
</html>