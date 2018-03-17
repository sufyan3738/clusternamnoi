<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
isset($fileupload); //รับค่าไฟล์จากฟอร์ม		
$name = $_POST['name'];
$type = $_POST['type'];
$color = $_POST['color'];
$size = $_POST['size'];
$unit = $_POST['unit'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$detail = $_POST['detail'];
$video = $_POST['video'];
$time = $_POST['time'];


//เพิ่มไฟล์
$upload = $_FILES['fileupload'];
if ($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
    $path = "img/";  

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
    $remove_these = array(' ', '`', '"', '\'', '\\', '/', '_');
    $newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);
 
	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = time() . '-' . $newname;
    $path_copy = $path . $newname;
    $path_link = "img/" . $newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['fileupload']['tmp_name'], $path_copy);
}
   
//เข้ารหัส รหัสผ่าน
$salt = 'ecom4cluster';
$has_password = hash_hmac('sha256', $password, $salt); 

    // เพิ่มไฟล์เข้าไปในตาราง identity
$queryID = "INSERT INTO identity (username,password,type) 
    VALUE ('$username','$has_password','$type')";

$result = mysqli_query($con, $queryID);

if (!$result) {
    echo "เกิดข้อผิดพลาด " . $con->error;
    echo "<meta http-equiv='refresh' content='5;URL=addshop.php' />";
    exit();
}

	// เพิ่มไฟล์เข้าไปในตาราง shop

$query = "INSERT INTO shop (s_pictures,username,password,s_address,s_district,s_amphur,s_province,s_zip_code,s_phone,s_latitude,s_longitude) 
		VALUES('$newname','$username','$has_password','$address','$district','$amphur','$province','$post','$phone','$latitude','$longitude')";

$result2 = mysqli_query($con,$query);

if ($result2){
    header("Location: admin.php");
  } else {
    echo "เกิดข้อผิดพลาด ". $con->error;
    echo "<meta http-equiv='refresh' content='5;URL=addshop.php' />";
    exit();
  }

mysqli_close($con);

?>