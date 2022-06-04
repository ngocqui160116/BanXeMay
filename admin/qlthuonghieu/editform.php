<?php include("../view/top.php"); ?>

<h3>Sửa thông tin xe</h3> 
<br>
<?php
	foreach ($sanpham as $sp):
		if($sp["id"] == $idsua){
	?>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Hình ảnh</label>
		<img width="150" src="../../<?php echo $sp["hinhanh"]; ?>">
		<!--<input type="file" class="from-control" name="filehinhanh" value="<?php echo $sp["hinhanh"]; ?>">-->
		<br>
		<div id="checkdoianh">
			<a  class="btn btn-primary"> Đổi ảnh</a><br>
		</div>	
		<div id="doianh">
			<input type="file" class="form-control" name="fileimgnew">
			<input type="hidden" class="form-control" name="filehinhanh" value="<?php echo $mh["hinhanh"]; ?>">
		</div>
		<script>
			$(document).ready(function(){
			//mac dinh an form
				$("#doianh").hide();

				//hien form khi nhan Doianh
				$("#checkdoianh").click(function(){
					$("#doianh").toggle(1000);
				});
			});
		</script>
	</div>
	<div class="form-group">
		<label>Tên xe</label>
		<input type="text" class="form-control" name="txttenxe" value="<?php echo $sp["tenxe"]; ?>">
	</div>
	<div class="form-group">
		<label>Màu xe</label>
		<input type="text" class="form-control" name="txtmauxe" value="<?php echo $sp["mauxe"]; ?>">
	</div>
	<div class="form-group">
		<label>Giá gốc</label>
		<input type="number" class="form-control" name="txtgiagoc" value="<?php echo $sp["giagoc"]; ?>">
	</div>
	<div class="form-group">
		<label>Giá bán</label>
		<input type="number" class="form-control" name="txtgiaban" value="<?php echo $sp["giaban"]; ?>">
	</div>
	
	<div class="form-group">
		<label>Số lượng tồn</label>
		<input type="number" class="form-control" name="txtsoluongton" value="<?php echo $sp["soluongton"]; ?>">
	</div>
	
	<div class="form-group">
		<label>Thương hiệu</label>
			<?php
				foreach ($thuonghieu as $th):
					if($th["id"] == $sp["thuonghieu_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $th["tenthuonghieu"]; ?>">
			<option value="<?php echo $th["id"]; ?>"><?php echo $th["tenthuonghieu"]; ?></option>
			<?php
				}
				endforeach;
			?>
			<?php
				foreach ($thuonghieu as $th):
					if($th["id"] != $sp["thuonghieu_id"]){
			?>	
			<option value="<?php echo $th["id"]; ?>"><?php echo $th["tenthuonghieu"]; ?></option>
			<?php
				}
				endforeach;
			?>
		</select> 
	</div>

	<div class="form-group">
		<label>Loại xe:</label>
			<?php
				foreach ($loaixe as $lx):
					if($lx["id"] == $sp["loaixe_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $lx["tenloaixe"]; ?>">
			<option value="<?php echo $lx["id"]; ?>"><?php echo $lx["tenloaixe"]; ?></option>
			<?php
				}
				endforeach;
			?>
			<?php
				foreach ($loaixe as $lx):
					if($lx["id"] != $sp["loaixe_id"]){
			?>	
			<option value="<?php echo $lx["id"]; ?>"><?php echo $lx["tenloaixe"]; ?></option>
			<?php
				}
				endforeach;
			?>
		</select> 
	</div>
	<div class="form-group">
		<h4>Thông số kĩ thuật</h4>
		<label>Kích thước:</label>
			<?php
				foreach ($kichthuoc as $kt):
					if($kt["id"] == $sp["kichthuoc_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $kt["tensanpham"]; ?>">
			<option value="<?php echo $kt["id"]; ?>"><?php echo $kt["tensanpham"]; ?></option>
			<?php
				}
				endforeach;
			?>
			;
			?>
		</select>
		<label>Khung xe:</label>
			<?php
				foreach ($khungxe as $kx):
					if($kx["id"] == $sp["khungxe_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $kx["tensanpham"]; ?>">
			<option value="<?php echo $kx["id"]; ?>"><?php echo $kx["tensanpham"]; ?></option>
			<?php
				}
				endforeach;
			?>
			;
			?>
		</select> 
		<label>Động cơ:</label>
			<?php
				foreach ($dongco as $dc):
					if($dc["id"] == $sp["dongco_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $dc["tensanpham"]; ?>">
			<option value="<?php echo $dc["id"]; ?>"><?php echo $dc["tensanpham"]; ?></option>
			<?php
				}
				endforeach;
			?>
			;
			?>
		</select> 
	</div>
	<div class="form-group">
		<label>Bảo hành:</label>
			<?php
				foreach ($baohanh as $bh):
					if($bh["id"] == $sp["baohanh_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $bh["thoigianbaohanh"]; ?>">
			<option value="<?php echo $bh["id"]; ?>"><?php echo $bh["thoigianbaohanh"]; ?></option>
			<?php
				}
				endforeach;
			?>
			<?php
				foreach ($baohanh as $bh):
					if($bh["id"] != $sp["baohanh_id"]){
			?>	
			<option value="<?php echo $bh["id"]; ?>"><?php echo $bh["thoigianbaohanh"]; ?></option>
			<?php
				}
				endforeach;
			?>
		</select> 
	</div>
	<div class="form-group">
		<label>Tình trạng:</label>
			<?php
				foreach ($tinhtrang as $tt):
					if($tt["id"] == $sp["tinhtrang_id"]){
			?>	
			<select class="form-control" name="optdanhmuc" value="<?php echo $tt["tinhtrang"]; ?>">
			<option value="<?php echo $tt["id"]; ?>"><?php echo $tt["tinhtrang"]; ?></option>
			<?php
				}
				endforeach;
			?>
			<?php
				foreach ($tinhtrang as $tt):
					if($tt["id"] != $sp["tinhtrang_id"]){
			?>	
			<option value="<?php echo $tt["id"]; ?>"><?php echo $tt["tinhtrang"]; ?></option>
			<?php
				}
				endforeach;
			?>
		</select> 
	</div>
	
	<?php 
	}
	endforeach;
	?>
	<input type="hidden" name="txtid" value="id">
	<input type="hidden" name="action" value="xulysua">
	<input type="submit" class="btn btn-primary" value="Cập nhật">
</form>


<?php include("../view/bottom.php"); ?>
