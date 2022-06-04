<?php include("../view/top.php"); ?>

<h3>Thêm thương hiệu mới</h3> 
<br>
<form method="post" enctype="multipart/form-data">
	
    <div class="form-group">
        <label>Tên thương hiệu:</label>
        <input type="text" class="form-control" name="txttenthuonghieu" require>
    </div>
    <div class="form-group">
        <label>Hình ảnh:</label>
        <input type="file" class="form-control" name="filehinhanh">
    </div>
    
    <input type="hidden" name="action" value="xulythem">
    <input type="submit" class="btn btn-primary" value="Lưu">
</form>

<?php include("../view/bottom.php"); ?>
