<?php 
require("../../model/database.php");
require("../../model/nguoidung.php");

// Biến cho biết ng dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){
    $action = "dangnhap";
}
else{
    $action="macdinh"; 
}

$nguoidung = new NGUOIDUNG();
$tb = "";
switch($action){
    case "macdinh":   
             
        include("main.php");
        break;
    case "dangxuat":
        
        unset($_SESSION["nguoidung"]);
                
        $tb = "Cảm ơn!";
        include("loginform.php");
        break;
    case "dangnhap":
        include("loginform.php");
        break;
    case "xldangnhap":
        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        if($nguoidung->kiemtranguoidunghople($email,$matkhau)==TRUE){
            $_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidung($email);
             if($_SESSION["nguoidung"]["loai"]==1 || $_SESSION["nguoidung"]["loai"]==2){
                include("main.php");
            // }
            // if($_SESSION["nguoidung"]["loai"]==3){
            //     include("quyenkhachhang.php");
            // }
        }
        else{
            $tb = "Đăng nhập không thành công!";
            include("loginform.php");
        }
        break;

    case "capnhathoso":
        $id = $_POST["txtid"];
        $email = $_POST["txtemail"];
		$sodienthoai = $_POST["txtdienthoai"];
		$hoten = $_POST["txthoten"];
		$hinhanh = $_POST["txthinhanh"];
		if($_FILES["fhinh"]["name"] != ""){
			$hinhanh = basename($_FILES["fhinh"]["name"]);
			move_uploaded_file($_FILES["fhinh"]["tmp_name"], "../images/".$hinhanh);
		}
		// cập nhật hò sơ 
		$nguoidung->capnhathosonguoidung($id,$email, $sodienthoai, $hoten, $hinhanh);
		$_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidung($email);
		include("main.php");
		break;
    case "doimatkhau":
         if (isset($_POST["txtemail"]) && isset($_POST["txtmatkhaumoi"]) )
            $nguoidung->doimatkhau($_POST["txtemail"],$_POST["txtmatkhaumoi"]);
        include("main.php");
        break;    
    default:
        break;
}
?>
