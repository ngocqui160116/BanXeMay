<?php include("view/top.php"); ?>
<br><br>
<?php include("view/carousel.php"); ?>
<div class="container">  

  <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
    <h3>Cảm ơn quý khách!</h3>
    <h4> Đơn hàng <?php echo $donhang_id ; ?> trị giá <strong><?php echo number_format($tongtien) ?>đ</strong> đã được tiếp nhận!</h4>
  <?php include("topview.php"); ?>
  

</div>

<?php include("view/bottom.php"); ?>