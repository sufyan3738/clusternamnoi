<?php
session_start();
?>
<?php

echo "ยินดีต้อนรับคุณ". $_SESSION["type"];
// Check Login
if($_SESSION["type"] == ''){
  echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
} else if($_SESSION['type'] != "A"){
  echo "<meta http-equiv='refresh' content='0;URL=logout.php' />";
} else
{
?>

<h1>Admin Page</h1>
<a href="logout.php" class="btn btn-primary">logout</a>
<?php
}


 ?>
<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

    require 'connect.php';

	$sql = "SELECT * FROM folk";

	$query = mysqli_query($con,$sql);
?>
<h1>รายชื่อชาวบ้าน</h1>
<br>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">FolkID </div></th>
    <th width="98"> <div align="center">รูปภาพ </div></th>
    <th width="198"> <div align="center">ชื่อ </div></th>
    <th width="97"> <div align="center">เบอร์โทรศัพท์ </div></th>
	<th width="50"> <div align="center">Edit </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["f_id"];?></div></td>
    <td><?php echo $result["f_picture"];?></td>
    <td><?php echo $result["f_name"];?></td>
    <td><div align="center"><?php echo $result["f_phone"];?></div></td>
	<td align="center"><a href="edit.php?CustomerID=<?php echo $result["CustomerID"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($con);
?>
</body>
</html>
