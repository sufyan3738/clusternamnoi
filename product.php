<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

  require 'connect.php';

	$sql = "SELECT * FROM product";

	$query = mysqli_query($con,$sql);
?>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
	<th width="50"> <div align="center">Edit </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["CustomerID"];?></div></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["Email"];?></td>
    <td><div align="center"><?php echo $result["CountryCode"];?></div></td>
    <td align="right"><?php echo $result["Budget"];?></td>
    <td align="right"><?php echo $result["Used"];?></td>
	<td align="center"><a href="edit.php?CustomerID=<?php echo $result["CustomerID"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>