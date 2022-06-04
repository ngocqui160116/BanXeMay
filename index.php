<?php 
require("model/database.php");
require("model/loaixe.php");
require("model/sanpham.php");
require("model/giohang.php");
require("model/mauxe.php");
require("model/thongso.php");
require("model/khachhang.php");
require("model/diachi.php");
require("model/donhang.php");
require("model/donhangct.php");
require("model/nguoidung.php");

$lx = new LOAIXE();
$sp = new SANPHAM();
$ts = new THONGSO();
$loaixe = $lx->layloaixe();

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

$sanphamnoibat = $sp->laysanphamnoibat();
//$danhmucxe = $sp->laysanphamtheoloaixe($maloaixe);
switch($action){
    case "macdinh":
        $loaixe=$lx->layloaixe();
        include("main.php");
        break;
    case "macdinh1":
        if($_REQUEST["maloaixe"] == 1 || $_REQUEST["maloaixe"] == 2 || $_REQUEST["maloaixe"] == 3){
            $maloaixe = $_REQUEST["maloaixe"];
            $loaixehientai = $lx->layloaixetheoid($maloaixe);
            $tenloaixe =  $loaixehientai["tenloaixe"];   
            $sanpham = $sp->laysanphamtheoloaixe(); 
            $chon = 1;
            include("main.php");
        }else{
            $chon = 2;
            include("main.php");
        }
        include("main.php");
        break;
    case "xemnhom": 
        if(isset($_REQUEST["maloaixe"])){
            $maloaixe = $_REQUEST["maloaixe"];
            $loaixehientai = $lx->layloaixetheoid($maloaixe);
            $tenloaixe =  $loaixehientai["tenloaixe"];   
            $sanpham = $sp->laysanphamtheoloaixe($maloaixe);
            include("group.php");
        }
        else{
            include("main.php");
        }
        break;
    case "xemchitiet": 
        if(isset($_GET["sanpham"])){
            $sanpham_id = $_GET["sanpham"];
            $thongso = $ts->laythongsotheoidxe($sanpham_id);
            // tăng lượt xem lên 1
           // $sp->tangluotxem($mahang);
            // lấy thông tin chi tiết mặt hàng
            $spct = $sp->laysanphamtheoid($sanpham_id);
            // lấy các mặt hàng cùng danh mục
            $maloaixe = $spct["loaixe_id"];
            $loaixe = $lx->layloaixetheoid($maloaixe);
            $tenloaixe = $loaixe["tenloaixe"];
            $sanpham = $sp->laysanphamtheoloaixe($maloaixe);
            include("detail.php");
        }
        break;
    case "chovaogio":
        if(isset($_REQUEST['txtmahang']))
            $mahang = $_REQUEST["txtmahang"];
        if(isset($_REQUEST['txtsoluong']))
            $soluong = $_REQUEST["txtsoluong"];
        if(isset($_SESSION['giohang'][$mahang])){
            $soluong += $_SESSION['giohang'][$mahang];
            $_SESSION['giohang'][$mahang] = $soluong;
        }else{
            themhangvaogio($mahang,$soluong);
        }
        // Chuyển đến trang xem giỏ hàng
        $giohang = laygiohang();
        include('cart.php');
        break;
    case "xemgiohang":
        $giohang = laygiohang();
        include('cart.php');
        break;
    case "capnhatgiohang":
        $sp = $_REQUEST["sp"];
        foreach($sp as $sanpham => $soluong) {
            if ($soluong > 0)
                capnhatsoluong($sanpham, $soluong);
            else
                xoamotsanpham($sanpham);
        }

        $giohang = laygiohang();
        include('cart.php');
        break;
    case "xoagiohang":
        xoagiohang();
        $giohang = laygiohang();
        include('cart.php');
        break;
    case "datmua":
        $giohang = laygiohang();
        include('checkout.php');
        break;
    case "luudonhang":
        $email = $_POST["txtemail"];
        $hoten = $_POST["txthoten"];
        $sodienthoai = $_POST["txtsodienthoai"];
        $diachi = $_POST["txtdiachi"];
        //thông tin khách
        $kh = new KHACHHANG();
        $khachhang_id = $kh->themkhachhang($email,$sodienthoai,$hoten);
        //địa chỉ khách
        $dc = new DIACHI();
        $diachi_id = $dc->themdiachi($khachhang_id,$diachi);
        //đơn hàng
        $dh = new DONHANG();
        $tongtien = tinhtiengiohang();
        $donhang_id = $dc->themdonhang($khachhang_id,$diachi_id,$tongtien);
        //chi tiết đơn hàng
        $ct = new DONHANGCT();
        $giohang = laygiohang();
        foreach($giohang as $mahang => $mh){
            $dongia = $mh["giaban"];
            $soluong = $mh["soluong"];
            $thanhtien = $mh["sotien"];
            $ct->themchitietdonhang($donhang_id,$mahang,$dongia,$soluong,$thanhtien);
        }
        //xóa giỏ hàng
        xoagiohang();

        include('message.php');
        break;
    
    case "dangnhap":
        include("view/nguoidung/dangnhap.php");
        break;
    case "dangnhap_xuly":
        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        $nguoidung = new NGUOIDUNG();
        if(trim($request['TenDangNhap']) == "")
			{
				$error_message = "Tên đăng nhập không được bỏ trống!";
				include_once "views/layouts/error.php";
			}
			elseif(trim($request['MatKhau']) == "")
			{
				$error_message = "Mật khẩu không được bỏ trống!";
				include_once "views/layouts/error.php";
			}
			else
			{
				$nguoidung = $db->DangNhapNguoiDung_Model($request);
				if($nguoidung)
				{
					if($nguoidung['Khoa'] == 1)
					{
						$error_message = "Tài khoản người dùng đã bị khóa!";
						include_once "views/layouts/error.php";
					}
					else
					{
						$_SESSION['ID'] = $nguoidung['ID'];
						$_SESSION['HoVaTen'] = $nguoidung['HoVaTen'];
						$_SESSION['QuyenHan'] = $nguoidung['QuyenHan'];
						header("Location: index.php");
					}
				}
				else
				{
					$error_message = "Tài khoản không tồn tại!";
					include_once "views/layouts/error.php";
				}
			}
        break;
    case "lienhe":
        include('lienhe.php');
        break;
    case "gioithieu":
        include('gioithieu.php');
        break;
    case "dangky":
        include('dangky.php');
        break;
    case "danhmucxe":
        $tongsp = $sp->demtongsanpham();
        $soluong = 4; // Mỗi trang hiện thị 4 mặt hàng

        $tongsotrang = ceil($tongsp/$soluong);

        if (!isset($_GET['trang'])) {
            $tranghienhanh = 1;
        }
        else {
            $tranghienhanh = $_GET['trang'];
        }

        $batdau = ($tranghienhanh - 1) * $soluong;

        $sanpham = $sp->laysanphamtrongkhoangchidinh($batdau, $soluong);
        include('danhmucxe.php');
        break;
    case "xemtheomuc": 
        if(isset($_REQUEST["maloaixe"])){
            $maloaixe = $_REQUEST["maloaixe"];
            $loaixehientai = $lx->layloaixetheoid($maloaixe);
            $tenloaixe =  $loaixehientai["tenloaixe"];   
            $sanpham = $sp->laysanphamtheoloaixe($maloaixe);
            
            include("main.php");
        }
        else{
            include("main.php");
        }
        break;
    default:
        break;
}
?>
