<?php 
require("../../model/database.php");
require("../../model/loaixe.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$lx = new LOAIXE();

$idsua=0;

switch($action){
    case "xem":
        $loaixe = $lx->layloaixe();
        include("main.php");
        break;
    case "xulythem":
    	$lx->themloaixe($_POST["txttenloaixe"]);
    	$loaixe = $lx->layloaixe();
        include("main.php");
    	break;
    case "xoa":
    	$lx->xoaloaixe($_GET["id"]);
    	$loaixe = $lx->layloaixe();
        include("main.php");
        break;
    case "sua":
    	$idsua = $_GET["id"];
    	$loaixe = $lx->layloaixe();
        include("main.php");
    	break;
	case "xulysua":
    	$lx->sualoaixe($_POST["txtid"],$_POST["txttenloaixe"]);
    	$loaixe = $lx->layloaixe();
        include("main.php");
    	break;

    default:
        break;
}
?>
