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
    <div class="form-group">
        <label>Thương hiệu:</label>
        <select class="form-control" name="optdanhmuc">
            <?php
                foreach($thuonghieu as $th):
            ?>
                <option value="<?php echo $th["id"]; ?>"><?php echo $th["tenthuonghieu"]; ?></option>
            <?php
                endforeach;
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Loại xe:</label>
        <select class="form-control" name="optdanhmuc">
            <?php
                foreach($loaixe as $lx):
            ?>
                <option value="<?php echo $lx["id"]; ?>"><?php echo $lx["tenloaixe"]; ?></option>
            <?php
                endforeach;
            ?>
        </select>
    </div>
    <div class="form-group">
        
    </div>
    <div class="form-group">
        <label>Bảo hành:</label>
        <select class="form-control" name="optdanhmuc">
            <?php
                foreach($baohanh as $bh):
            ?>
                <option value="<?php echo $bh["id"]; ?>"><?php echo $bh["thoigianbaohanh"]; ?></option>
            <?php
                endforeach;
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tình trạng:</label>
        <select class="form-control" name="optdanhmuc">
            <?php
                foreach($tinhtrang as $tt):
            ?>
                <option value="<?php echo $tt["id"]; ?>"><?php echo $tt["tinhtrang"]; ?></option>
            <?php
                endforeach;
            ?>
        </select>
    </div>
    <input type="hidden" name="action" value="xulythem">
    <input type="submit" class="btn btn-primary" value="Lưu">
</form>

<?php include("../view/bottom.php"); ?>
