<?php 
require("../../model/database.php");
require("../../model/loaixe.php");
require("../../model/sanpham.php");
require("../../model/tinhtrang.php");
require("../../model/baohanh.php");
require("../../model/thuonghieu.php");


// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$lx = new LOAIXE();
$sp = new SANPHAM();
$th = new THUONGHIEU();
$bh = new BAOHANH();
$tt = new TINHTRANG();


$idsua=0;

switch($action){
    case "xem":
        $sanpham = $sp->laysanpham();
        include("main.php");
        break;
    case "them":
        $thuonghieu = $th->laythuonghieu();
        $loaixe=$lx->layloaixe();
        $baohanh=$bh->laybaohanh();
        $tinhtrang=$tt->laytinhtrang();
        include("addform.php");
        break;
    case "xulythem":        
        $hinhanh = "images/sanpham/" . basename($_FILES["filehinhanh"]["name"]); //duong dan 
        $duongdan = "../../" . $hinhanh; //noi upload file
        move_uploaded_file($_FILES["filehinhanh"]["tmp_name"],$duongdan);
        $tensanpham = $_POST["txttensanpham"];
        $tenmauxe = $_POST["txtmauxe"];
        $giagoc = $_POST["txtgiagoc"];
        $giaban = $_POST["txtgiaban"];
        $soluongton = $_POST["txtsoluongton"];
        $thuonghieu_id=$_POST["optdanhmuc"];
        $loaixe_id=$_POST["optdanhmuc"];
        $baohanh_id=$_POST["optdanhmuc"];
        $tinhtrang_id=$_POST["optdanhmuc"];
        $sp->themsanpham($tensanpham,$tenmauxe,$giagoc,$giaban,$hinhanh,$soluongton,$thuonghieu_id, $loaixe_id, $baohanh_id,$tinhtrang_id);
        $sanpham = $sp->laysanpham();
        include("main.php");
        break;

    case "xoa":
        $sp->xoasanpham($_GET["id"]);
        $sanpham = $sp->laysanpham();
        include("main.php");
        break;
    case "sua":
        $idsua = $_GET["id"];
        $loaixe = $lx->layloaixe();
        $sanpham = $sp->laysanpham();
        $thuonghieu = $th->laythuonghieu();
        $baohanh = $bh->laybaohanh();
        $tinhtrang = $tt->laytinhtrang();

        //$mhtheodanhmuc = $mh->laymathangtheodanhmuc($mathanghienhanh["danhmuc_id"]);
        include("editform.php");
        break;
    case "xulysua":
        $id = $_POST["txtid"];
        $tenxe=$_POST["txttenxe"];
        $mauxe=$_POST["txtmauxe"];
        $giagoc=$_POST["txtgiagoc"];
        $giaban=$_POST["txtgiaban"];
        $soluongton=$_POST["txtsoluongton"];
        $thuonghieu_id=$_POST["optthuonghieu"];
        $loaixe_id=$_POST["optloaixe"];
        $baohanh_id=$_POST["optbaohanh"];
        $tinhtrang_id=$_POST["opttinhtrang"];

        $img_moi=$_FILES['fileimgnew']['name'];
        $img_cu=$_POST['filehinhanh'];
        if($img_moi != '')
        {
            $hinhanh = "images/".basename($_FILES["fileimgnew"]["name"]);
            $duongdan="../../".$hinhanh;//Nơi upload file
            move_uploaded_file($_FILES["fileimgnew"]["tmp_name"],$duongdan);
        }
        else{
            $hinhanh =  $img_cu;
        } 

        $sp->suasanpham($id,$tenxe, $mauxe,$giagoc, $giaban, $hinhanh, $soluongton, $thuonghieu_id,$loaixe_id,$baohanh_id,$tinhtrang_id);
        $sanpham = $sp->laysanpham();
        include("main.php");
        break;

    default:
        break;
}
?>
