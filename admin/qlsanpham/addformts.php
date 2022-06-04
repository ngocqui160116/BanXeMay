<?php include("../view/top.php"); ?>

<h3>Thêm thông tin xe > Thêm thông số kỹ thuật</h3> 
<br>
<form method="post" enctype="multipart/form-data">
<div class="form-group">
        <label>Tên sản phẩm:</label>
        <input type="text" class="form-control" name="txttsp" require>
    </div>
    <div class="form-group">
        <label>Khối lượng bản thân:</label>
        <input type="text" class="form-control" name="txtklbt" require>
    </div>
    <div class="form-group">
        <label>Dài x rộng x cao:</label>
        <input type="text" class="form-control" name="txtdrc" require>
    </div>
    <div class="form-group">
        <label>Khoảng cách trục bánh xe:</label>
        <input type="text" class="form-control" name="txtkctbx" require>
    </div>
    <div class="form-group">
        <label>Độ cao yên:</label>
        <input type="text" class="form-control" name="txtdcy" require>
    </div>
    <div class="form-group">
        <label>Khoảng sáng gầm xe:</label>
        <input type="text" class="form-control" name="txtksgx" require>
    </div>
    <div class="form-group">
        <label>Dung tích bình xăng:</label>
        <input type="text" class="form-control" name="txtdtbx" require>
    </div>
    <div class="form-group">
        <label>Kích cỡ lớp:</label>
        <input type="text" class="form-control" name="txtkcl" require>
    </div>
    <div class="form-group">
        <label>Phuộc trước:</label>
        <input type="text" class="form-control" name="txtpt" require>
    </div>
    <div class="form-group">
        <label>Phuộc sau:</label>
        <input type="text" class="form-control" name="txtps" require>
    </div>
    <div class="form-group">
        <label>Loại động cơ:</label>
        <input type="text" class="form-control" name="txtldc" require>
    </div>
    <div class="form-group">
        <label>Công suất tối đa:</label>
        <input type="text" class="form-control" name="txtcstd" require>
    </div>
    <div class="form-group">
        <label>Dung tích nhớt máy:</label>
        <input type="text" class="form-control" name="txtdtnm" require>
    </div>
    <div class="form-group">
        <label>Mức tiêu thụ nhiên liệu:</label>
        <input type="text" class="form-control" name="txtmttnl" require>
    </div>
    <div class="form-group">
        <label>Hợp số:</label>
        <input type="text" class="form-control" name="txths" require>
    </div>
    <div class="form-group">
        <label>Loại truyền động:</label>
        <input type="text" class="form-control" name="txtltd" require>
    </div>
    <div class="form-group">
        <label>Hệ thống khởi động:</label>
        <input type="text" class="form-control" name="txthtkd" require>
    </div>
    <div class="form-group">
        <label>Moment cực đại:</label>
        <input type="text" class="form-control" name="txtmmcd" require>
    </div>
    <div class="form-group">
        <label>Dung tích xy-lanh:</label>
        <input type="text" class="form-control" name="txtdtxl" require>
    </div>
    <div class="form-group">
        <label>Đường kính x Hành trình pít tông:</label>
        <input type="text" class="form-control" name="txtpit" require>
    </div>
    <div class="form-group">
        <label>Tỷ số nén:</label>
        <input type="text" class="form-control" name="txttsn" require>
    </div>
    <input type="hidden" name="action" value="xulythemthongso">
    <input type="submit" class="btn btn-primary" value="Lưu">
</form>

<?php include("../view/bottom.php"); ?>
