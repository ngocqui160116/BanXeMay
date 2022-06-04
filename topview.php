<div class="row"> 
    <!-- Hàng nổi bật -->    
    <h3>Sản phẩm nổi bật</h3>
    <?php
    foreach($sanphamnoibat as $s):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-danger text-center">
        <div class="panel-heading">
          <strong>
          <a class="panel-title"  href="?action=xemnhomsanpham&maloaixe=<?php echo $s["loaixe_id"]; ?>">
          <?php echo $s["tenloaixe"]; ?>
          </strong>
          </a>  
        </div>
        <div class="panel-body">
          <a href="?action=xemchitiet&maloaixe=<?php echo $s["id"]; ?>"><img src="<?php echo $s["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $s["tenxe"]; ?>"></a>
          <a href="?action=xemchitiet&maloaixe=<?php echo $s["id"]; ?>"><?php echo $s["tenxe"]; ?></a>
        </div>
        <div class="panel-footer">
          <a class="btn btn-success" href="?action=xemchitiet&sanpham=<?php echo $s["id"]; ?>">Chi tiết</a>
          <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $s["id"]; ?>&soluong=1">Chọn mua</a>
        </div>
      </div>
    </div> 
    <?php endforeach; ?>
</div>