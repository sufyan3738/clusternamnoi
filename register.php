<?php
    require 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $amphur = $_POST['amphur'];
    $province = $_POST['province'];
    $post = $_POST['post'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    //เข้ารหัส รหัสผ่าน
    $salt = 'ecom4cluster';
    $has_password = hash_hmac('sha256', $password, $salt);

    $queryID = "INSERT INTO identity (username,password) 
            VALUE ('$username','$has_password')";

    $result = mysqli_query($con,$queryID);

    if ($result){
      header("Location: index.php");
    } else {
      echo "เกิดข้อผิดพลาด ". $con->error;
      echo "<meta http-equiv='refresh' content='5;URL=user_register.php' />";
      exit();
    }

    $query = "INSERT INTO customer (username,password,c_name,c_address,c_district,c_amphur,c_province,c_zip_code,c_phone,c_email) 
            VALUE ('$username','$has_password','$name','$address','$district','$amphur','$province','$post','$phone','$email')";

    mysqli_query($con,$query);
    

mysqli_close($con);
?>