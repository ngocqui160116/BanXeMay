<?php include("view/top.php"); ?>
<br><br><br>
<div class="container">    
  <div class="row"> 
    <h3>Giỏ hàng của bạn</h3>
    <?php
      if (demhangtronggio() == 0) {
        echo "<p>Giỏ hàng rỗng</p>";
      } else {
    ?>
    <form method="post">
      <input type="hidden" name="action" value="capnhatgiohang">
      <table class="table table-hover">
        <tr class="bg-primary">
          <th>Sản phẩm</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
        </tr>
        <?php
          foreach ($giohang as $sanpham => $sp) {
        ?>
            <tr>
              <td><?php echo $sp['tenhang']; ?></td>
              <td><?php echo number_format($sp['giaban']); ?> VNĐ</td>
              <td>
                <input type="number" name="sp[<?php echo $sanpham; ?>]" value="<?php echo $sp['soluong']; ?>">
              </td>
              <td><?php echo number_format($sp['sotien']); ?> VNĐ</td>
            </tr>
        <?php
          }
        ?>
        <tr>
          <td colspan="3" align="right">Tổng tiền</td>
          <td><strong><?php echo number_format(tinhtiengiohang()); ?> VNĐ</strong></td>
        </tr>
        <tr>
          <td colspan="2" align="left">
            <i>Để xóa mặt hàng nhập số lượng bằng 0 </i>| <a href="index.php?action=xoagiohang">Xóa tất cả</a>
          </td>
          <td colspan="2" align="right">
            <input type="submit" class="btn btn-warning" value="Cập nhật">
            <a class="btn btn-danger" href="?action=datmua">Đặt mua</a>
          </td>
        </tr>
      </table>
    </form>
    <?php
      }
    ?>
  </div>
</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>