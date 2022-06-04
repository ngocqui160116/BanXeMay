<?php 
$err=[];
if(isset($_POST['name'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pasword = $_POST['pasword'];
  $repassword = $_POST['repassword'];
  if(empty($email)){
    $err['email'] = 'Bạn chưa nhập tên';
  }
  if(empty($name)){
    $err['name'] = 'Bạn chưa nhập email';
  }
  if(empty($password)){
    $err['password'] = 'Bạn chưa nhập password';
  }
  if(empty($repassword)){
    $err['repassword'] = 'Mật khẩu nhập lại không đúng';
  }
  //var_dump(!empty($err));
  if(empty($err)){
    $pass = md5($password);
    $sql = "INSERT INTO user(name,email,pasword) VALUES('$name','$email','$pass')";
    $query = mysqli_query($conn,$sql);
    if($query){
      header('location: login.php');
    }
  }
  //die();
  
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
        <legend>Đăng ký tài khoản</legend>
          <div class="form-group">
            <label for="">Tên người dùng</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
            <div class="has-error">
              <span><?php echo (isset($err['name']))?$err['name']:'' ?></span>
            </div>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email">
            <div class="has-error">
              <span><?php echo (isset($err['email']))?$err['email']:'' ?></span>
            </div>
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" placeholder="" name="password">
            <div class="has-error">
              <span><?php echo (isset($err['password']))?$err['password']:'' ?></span>
            </div>
          </div>
          <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="" placeholder="" name="repassword">
            <div class="has-error">
              <span><?php echo (isset($err['repassword']))?$err['repassword']:'' ?></span>
            </div>
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