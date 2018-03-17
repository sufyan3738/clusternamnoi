<?php
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query

                $query="SELECT * FROM user Where Username='".$Username."' and Password='".$Password."' ";

                 $result = mysqli_query($con,$query);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result); //คืนค่าข้อมูลในฐานข้อมูลที่อยู่ในลักษณะเป็นแถว

                      $_SESSION["UserID"] = $row["Member_ID"];//สำคัญ
                    //  $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php


                        echo "<script>";
                            echo "alert(\"ยินดีต้อนรับ ADMIN: $Username\");";
                            echo "window.location = 'employee.php';";
                        echo "</script>";
                      }

                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                        echo "<script>";
                            echo "alert(\"ยินดีต้อนรับ คุณ $Username\");";
                            echo "window.location = 'upload.php';";
                        echo "</script>";


                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง\");";
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form_login.php"); //user & password incorrect back to login again

        }
?>
