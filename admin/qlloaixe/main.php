<?php include("../view/top.php"); ?>

<h3>Quản lý loại xe</h3> 
<br>
<table class="table table-hover">
	<tr class="bg-primary"><th>Loại xe</th><th>Sửa</th><th>Xóa</th></tr>
	<?php
	foreach ($loaixe as $lx):
		if($lx["id"] == $idsua){
	?>
		<form method="post">
		<tr>
			<td><input type="text" name="txttenloaixe" class="form-control" value="<?php echo $lx["tenloaixe"]; ?>"</td>
			<td>
				<input type="hidden" name="txtid" value="<?php echo $lx["id"]; ?>">
				<input type="hidden" name="action" value="xulysua">
				<input type="submit" value="Cập nhật"></td>
			<td><a href="index.php?action=xoa&id=<?php echo $lx["id"]; ?>">Xóa</a></td>
		</tr>
		</form>
	<?php	
		}
		else{
	?>
		<tr>
			<td><?php echo $lx["tenloaixe"]; ?></td>
			<td><a href="index.php?action=sua&id=<?php echo $lx["id"]; ?>">Sửa</a></td>
			<td><a href="index.php?action=xoa&id=<?php echo $lx["id"]; ?>">Xóa</a></td>
		</tr>
	<?php 
	}
	endforeach;
	?>
</table>

<div id="buttonthem">
	<a class="btn btn-primary">Thêm loại xe</a>
</div>
<br> <br>
<div  id="formthem">
	<form class="form-inline" method="post">
		<input type="text" class="form-control" name="txttenloaixe" placeholder="Nhập loại xe">
		<input type="hidden" name="action" value="xulythem">
		<input type="submit" class="btn btn-warning" value="Thêm">
	</form>
</div>
<script>
	$(document).ready(function(){
		//mac dinh an form
		$("#formthem").hide();

		//hien form khi nhan Them
		$("#buttonthem").click(function(){
			$("#formthem").toggle(1000);
			$("#buttonthem").hide();
		});
	});
</script>

<?php include("../view/bottom.php"); ?>
