<?php include("view/top.php"); ?>
<br><br><br>
<div class="container">    
  <div class="row"> 
    <h3>Vui lòng nhập đầy đủ thông tin</h3>
    <div class="col-sm-6">
      <h4>Thông tin khách hàng</h4>
      <form method="POST">
        <input type="hidden" name="action" value="luudonhang">
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="txtemail" required>
        </div>
        <div class="form-group">
          <label>Họ tên</label>
          <input type="text" class="form-control" name="txthoten" required>
        </div><div class="form-group">
          <label>Số điện thoại</label>
          <input type="number" class="form-control" name="txtsodienthoai" required>
        </div><div class="form-group">
          <label>Địa chỉ</label>
          <textarea class="form-control" name="txtdiachi" required></textarea>
        </div>
        <div class="form-group">
         <input type="submit" value="Hoàn tất" class="btn btn-success">
        </div>
      </form>
    </div>
    <div class="col-sm-6">
      <h4>Các mặt hàng đã chọn</h4>
      <table class="table table-bordered">
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
      </table>
    </div>
  </div>
</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>