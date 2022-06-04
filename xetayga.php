<div class="row"> 
    <!-- Hàng nổi bật -->    
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
            <a class="btn btn-success" href="?action=xemchitiet&sanphamid=<?php echo $sp["id"]; ?>">Chi tiết</a>
            <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $sp["id"]; ?>&soluong=1">Chọn mua</a>
        </div>
      </div>
    </div>    
    <?php 
    endforeach; ?>
</div>