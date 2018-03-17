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


<a href="addfolk.php">เพิ่มชาวบ้าน</a>
<a href="sendlist.php">รายการสินค้าที่ต้องจัดส่ง</a>
<a href="searchproduct.php">เพิ่ม/แก้ไขข้อมูลสินค้า</a>
<a href="buyproduct.php">รับฝากขายสินค้า</a>
<a href="payproduct.php">ชำระเงินค่าสินค้า</a>
<a href="booking.php">จองผลิตสินค้า</a>
<a href="report.php">รายงาน</a>
<a href="addtrack.php">เพิ่มเลขพัสดุ</a>