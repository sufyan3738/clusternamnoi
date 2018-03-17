<?php
    require 'connect.php';

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    //เข้ารหัส รหัสผ่าน
    $salt = 'ecom4cluster';
    $has_password = hash_hmac('sha256', $password, $salt);

    $sql = "SELECT * FROM identity WHERE username=? AND password=?";
    $statement = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($statement,"ss", $username,$has_password);
    mysqli_execute($statement);
    $result_user = mysqli_stmt_get_result($statement);
    if ($result_user->num_rows == 1) {
        session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['iden_id'] = $row_user['iden_id'];
        $_SESSION["type"] = $row_user["type"];

        if($_SESSION["type"]=="C"){ //ถ้าเป็น admin ให้กระโดดไปหน้า index.php
            header("Location: index.php");
          }
          if($_SESSION["type"]=="S"){ //ถ้าเป็น admin ให้กระโดดไปหน้า shop.php
            header("Location: shop.php");
          }
          if($_SESSION["type"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin.php
            header("Location: admin.php");
          }
          if ($_SESSION["type"]=="F"){  //ถ้าเป็น member ให้กระโดดไปหน้า folk.php
            header("Location: folk.php");
          }
 
    }   else {
            //echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            //echo "<meta http-equiv='refresh' content='2;URL=index.php' />";

            echo "<script type='text/javascript'>";
            echo "alert('ผู้ใช้หรือรหัสผ่านผิด โปรดกรอกใหม่อีกครั้ง');";
            echo "</script>";
            echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
            //header("Location: index.php");
    }

?>