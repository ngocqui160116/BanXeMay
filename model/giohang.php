<?php
// Tạo mảng SESSION giohang rỗng nếu nó không tồn tại
if (!isset($_SESSION['giohang']) ) {
    $_SESSION['giohang'] = array();
}

// Hàm thêm sản phẩm vào giỏ
function themhangvaogio($sanpham, $soluong) {
    //Cập nhập Số lượng vào SESSION - Làm tròn
    $_SESSION['giohang'][$sanpham] = round($soluong, 0);
}

// Cập nhật số lượng của giỏ hàng
function capnhatsoluong($sanpham, $soluong) {
    if (isset($_SESSION['giohang'][$sanpham])) {
        $_SESSION['giohang'][$sanpham] = round($soluong, 0);
    }
}

// Xóa một sản phẩm trong giỏ hàng
function xoamotsanpham($sanpham) {
    if (isset($_SESSION['giohang'][$sanpham])) {
        unset($_SESSION['giohang'][$sanpham]);
    }
}

// Hàm lấy mảng các sản phẩm trong giohang
function laygiohang() {
	
    //Tạo mảng rỗng để lưu danh sách sản phẩm trong giỏ
    $sp = array();
    $sp_db = new SANPHAM();
    
    //Duyệt mảng SESSION giohang và lấy từng id sản phẩm cùng số lượng
    foreach ($_SESSION['giohang'] as $sanpham => $soluong ) {
        // Gọi hàm lấy thông tin của sản phẩm theo mã sản phẩm
        $s = $sp_db->laymauxetheoid($sanpham);
        $dongia = $s['giaban'];
        $solg = intval($soluong);        
        // Tính tiền
        $sotien = round($dongia * $soluong, 2);

        // Lưu thông tin trong mảng items để hiển thị lên giỏ hàng
        $sp[$sanpham]['tenhang'] = $s['tenxe'];
        $sp[$sanpham]['giaban'] = $dongia;
        $sp[$sanpham]['soluong'] = $solg;
        $sp[$sanpham]['sotien'] = $sotien;
    }
    return $sp;
}

// Đếm số sản phẩm trong giỏ hàng
function demhangtronggio() {
    return count($_SESSION['giohang']);
}

// Đếm tổng số lượng các sản phẩm trong giỏ
function demsoluongtronggio() {
    $tongsl = 0;
	//Lấy mảng các sản phẩm từ trong SESSION
    $giohang = laygiohang();
    foreach ($giohang as $item) {
        $tongsl += $item['soluong'];
    }
    return $tongsl;
}

// Tính tổng thành tiền trong giỏ hàng
function tinhtiengiohang () {
    $tong = 0;
    $giohang = laygiohang();
    foreach ($giohang as $mh) {
        $tong += $mh['giaban'] * $mh['soluong'];
    }
    return $tong;
}

// Xóa tất cả giỏ hàng
function xoagiohang() {
    $_SESSION['giohang'] = array();
}

?>