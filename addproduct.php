<?php
session_start();
?>
<?php

echo "ยินดีต้อนรับคุณ". $_SESSION["type"];
// Check Login
if($_SESSION["type"] == ''){
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
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
    <title>เพิ่มสินค้า</title>
</head>
<body>
    <h1>เพิ่มข้อมูลสินค้า</h1>
    
    <form action="add_product.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
        <label><input type="file" name="fileupload" id="fileupload"  required="required"/></label>
        <br>
        <label for="name">ชื่อสินค้า : </label>
        <input type="text" name="name" required autofocus>
        <br>
        <label for="type">ประเภท : </label>
        <input type="text" name="type" required>
        <br>
        <label for="color">สี : </label>
        <input type="text" name="color" required>
        <br>
        <label for="size">ขนาด : </label>
        <input type="text" name="size" required>
        <br>
        <label for="unit">หน่วย : </label>
        <input type="text" name="unit" required>
        <br>
        <label for="weight">น้ำหนัก : </label>
        <input type="text" name="weight" required>
        <br>
        <label for="price">ราคาขาย : </label>
        <input type="text" name="price" required>
        <br>
        <label for="detail">รายละเอียดสินค้า : </label>
        <textarea name="detail" required></textarea>
        <br>
        <label for="video">วิดีโอ : </label>
        <input type="text" name="video" required>
        <br>
        <label for="time">ระยะเวลาในการผลิตสินค้า : </label>
        <input type="text" name="time" required>
        <br>
        <br><br>
        <input type="submit" value="ยืนยัน">
    </form>
    <br><br>
    <a href="shop.php">กลับหน้าหลัก</a>
</body>
</html>