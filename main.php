<?php include("view/top.php"); ?>
<br><br>
<?php include("view/carousel.php"); ?>
<div class="container">  

  <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
    <div class="tatcaxe">
      <h3>DANH MỤC XE</h3>  
      <a class="btn btn-success" href="?action=laytatca">Tất cả xe</a>
      <a class="btn btn-success" href="?action=macdinh1?maloaixe=1">Xe số</a>
      <a class="btn btn-success" href="?action=macdinh1?maloaixe=2">Xe tay ga</a>
      <a class="btn btn-success" href="?action=macdinh1?maloaixe=3">Xe côn tay</a>

    </div>
    <br>
    <!-- ? -->
    <?php
    foreach($sanphamnoibat as $sp):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-primary text-center">
        <div class="panel-heading">
           
          <a href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>" style="color:white;font-weight:bold;" ><?php echo $sp["tenxe"]; ?></a>
        </div>
        
        <div class="panel-body"><a href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>"><img src="<?php echo $sp["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $sp["tenxe"]; ?>"></a>
            <strong>Giá bán: <span  class="text-danger">
            <?php echo number_format($sp["giaban"]); ?>đ</span> </strong>
        </div>
        <div class="panel-footer">
            <a class="btn btn-success" href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">Chi tiết</a>
            <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $sp["id"]; ?>&soluong=1">Chọn mua</a>
        </div>
      </div>
    </div>    
    <?php 
    endforeach;
    
    ?>
  </div>
  <a class="btn btn-success" href="?action=danhmucxe">Xem thêm</a>

  <?php include("topview.php"); ?>
  

</div>

<?php include("view/bottom.php"); ?>