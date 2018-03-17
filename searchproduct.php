<?php
session_start();

?>
<?php

echo "ยินดีต้อนรับคุณ" . $_SESSION["type"];
// Check Login
if ($_SESSION["type"] == '') {
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
} else if ($_SESSION['type'] != "S") {
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
} else {
  ?>
<h1>Shop Page</h1>
<a href="logout.php" class="btn btn-primary">logout</a>
<br><br>
<?php
}

$Keyword = null;

if (isset($_POST["Keyword"])) {
  $Keyword = $_POST["Keyword"];
}
?>
 <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
  <table width="550" border="1">
    <tr>
      <th>Keyword
        <input name="Keyword" type="text" id="Keyword" value="<?php echo $Keyword; ?>">
        <input type="submit" value="Search">
      </th>
    </tr>
  </table>
 </form>

<?php
  require 'connect.php';

  $sql = "SELECT * FROM product WHERE p_name LIKE '%".$Keyword."%' ";

  $query = mysqli_query($con,$sql);
?>

<table width="600" border="1">
  <tr>
    <th width="100"><div align="center">รูปภาพ</div></th>
    <th width="100"><div align="center">ชื่อสินค้า</div></th>
    <th width="100"><div align="center">ประเภทสินค้า</div></th>
    <th width="100"><div align="center">แก้ไข</div></th>  
  </tr>
<?php
  while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
?>
  <tr>
    <td></td>
    <td><?php echo $result["p_name"];?></td>
    <td><?php echo $result["p_type"];?></td>
    <td></td>
  </tr>
<?php
  }
?>
</table>
<?php
mysqli_close($con);
?>
<a href="addproduct.php">เพิ่มข้อมูลสินค้าใหม่</a>