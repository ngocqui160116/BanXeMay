<?php
include "connect.php";
  if(isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
    //Thực hiện xử lý 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $level = 3;
    if($password != $repassword){
      header("location:register.php");
    }
    $sql = "SELECT * FROM user WHERE username='$username'";
    $old = mysqli_query($connn,$sql);
    $password = md5($pasword);
    if(mysqli_num_rows($old) > 0){
      header("location:register..php");
    }
    $sql = "INSERT INTO user(username,password,level) values ('username','password','level'";
    mysqli_query($conn,$sql);
    echo "Đã đăng ký thành công!";
  } else{
    header("location:register.php");
  }
?>