<?php 
//thêm dòng bên index.php
//$user = (isset($_SESSION['user])) ? $_SESSION['user']: [];
include("connect.php");
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $pasword = $_POST['pasword'];

  $sql = "SELECT * FROM user WHERE email = '$email'";
  $query = mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($query);
  $checkEmail = mysqli_num_rows($query);
  if($checkEmail ==1){
    echo $data['password'];
    echo "<br>";
    echo $password;
    $checkPass = password_verify($password,$data['password']);
    if($checkPass){
      $_SESSION['user'] = $data;
      header('location: index.php');
    }else{
      echo "Sai mật khẩu";
    }
  }else{
    echo "Sai thông tin";
  }
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng ký</title>
  <style>
    .has-error{
      color:red;
    }
  </style>
</head>
<body>
  <h3>Đăng ký</h3>
  <div class="container">
    <div class="col-md-6">
      <form action="register-submit.php" method="POST">
        <legend>Đăng nhập</legend>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email">
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" placeholder="" name="password">
          </div>
            <td>
              <button type="submit" name="submit">Đăng ký</button>
              <button type="reset" >Làm mới</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  
</body>
</<html>