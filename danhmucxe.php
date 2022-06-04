<?php include("view/top.php"); ?>
<br><br>
<div class="container">
 <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
    <div class="tatcaxe">
      <h3>DANH MỤC XE</h3>  
    </div>
    <?php
    foreach($sanpham as $sp):
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
    endforeach; ?>
  </div>

  <div class="row">
    <div class="col-sm-3">
      <ul class="pagination">
        <!-- Nút trở về đầu -->
        <li>
          <a href="?action=danhmucxe&trang=1"><span class="glyphicon glyphicon-step-backward"></span></a>
        </li>
        <!-- Nút trở back về 1 trang -->
        <?php
          if ($tranghienhanh > 1 && $tongsotrang > 1)
          {
        ?>
            <li>
              <a href="?action=danhmucxe&trang=<?php echo $tranghienhanh - 1; ?>">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
            </li>
            <?php
          }
          else{            
        ?>
            <li>
                  <a disabled>
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                </li>
                <?php
          }
                      
        ?>

        <!-- Xuất tất cả các trang -->
        <?php
          for ($i = 1; $i <= $tongsotrang; $i++) {
            if ($tranghienhanh == $i) {
        ?>
              <li class="active">
                <a href="?action=danhmucxe&trang=<?php echo $i; ?>">
                  <?php echo $i; ?>
                </a>
              </li>
        <?php
            }
            else 
            { 
        ?>
              <li><a href="?action=danhmucxe&trang=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
            }
          }
          if ($tranghienhanh < $tongsotrang && $tongsotrang > 1)
          {
        ?>
        <li>
          <a href="?action=danhmucxe&trang=<?php echo $tranghienhanh+1; ?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </li>
        <?php
          }else
          {
        ?>
        <li>
        <a disabled><span class="glyphicon glyphicon-chevron-right"></span></a>
        </li>
        <?php
          }
          ?>
        <li>
          <a href="?action=danhmucxe&trang=<?php echo $tongsotrang; ?>">
            <span class="glyphicon glyphicon-step-forward"></span>
          </a>
        </li>

      </ul>
    </div>     
  </div>
  
</div>

<?php include("view/bottom.php"); ?>