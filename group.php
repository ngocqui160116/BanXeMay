<?php include("view/top.php"); ?>
<br><br>
<div class="container">    
<div class="row">
<br><br>
<h3>Trang chủ > <?php echo $tenloaixe; ?></h3><hr>
<?php
if($sanpham != null){
foreach($sanpham as $sp):  
?>
<div class="col-sm-3">
  <div class="panel panel-info text-center">
    <div class="panel-heading"><a href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">
    	<?php echo $sp["tenxe"]; ?></a></div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">
    	<img src="<?php echo $sp["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $sp["tenxe"]; ?>"></a>
    	<div>Giá bán: <span  class="text-danger"><?php echo number_format($sp["giaban"]); ?>đ</span>  </div>
    </div> 
	<div class="panel-footer">
        <a class="btn btn-info" href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">
    	Chi tiết</a> 
        <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $sp["id"]; ?>&soluong=1">Chọn mua</a>  
    </div>  
     
  </div>
</div>
<?php 
endforeach; 
}
else{
    echo "<p>Vui lòng xem danh mục khác...</p>";
}
?>


</div>

<?php include("topview.php"); ?>
</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>