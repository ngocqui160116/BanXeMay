<?php include("../view/top.php"); ?>

<h3>Thêm thông tin xe</h3> 
<br>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên xe:</label>
        <input type="text" class="form-control" name="txttensanpham" require>
    </div>
    <div class="form-group">
        <label>Màu xe:</label>
        <input type="text" class="form-control" name="txtmauxe" require>
    </div>
    <div class="form-group">
        <label>Giá gốc:</label>
        <input type="text" class="form-control" name="txtgiagoc" require>
    </div>
    <div class="form-group">
        <label>Giá bán:</label>
        <input type="text" class="form-control" name="txtgiaban" require>
    </div>
    <div class="form-group">
        <label>Số lượng:</label>
        <input type="text" class="form-control" name="txtsoluongton" require>
    </div>
    <div class="form-group">
        <label>Hình ảnh:</label>
        <input type="file" class="form-control" name="filehinhanh">
    </div>
    <input type="hidden" name="action" value="xulythemhinhanh">
    <input type="submit" class="btn btn-primary" value="Lưu">
</form>

<?php include("../view/bottom.php"); ?>
