<?php include("../view/top.php"); ?>

<h3>Quản lý xe</h3> 
<br>


<table class="table table-hover">
	<tr class="bg-primary">
		<th>Tên thương hiệu</th>
		<th>Hình ảnh</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php 
	foreach ($thuonghieu as $th):
	?>

	<tr>
		<td><?php echo $th["tenthuonghieu"]; ?></td>
		<td><img width="80px" src="../../<?php echo $th["hinhanh"]; ?>"></td>
		<td><a href="?action=sua&id=<?php echo $th["id"]; ?>">Sửa</a></td>
		<td class="text-center"><a onclick="return confirm('Bạn có muốn xóa phải không?')" href="?action=xoa&id=<?php echo $th["id"]; ?>">Xóa</a></td>
	</tr>

	<?php
	endforeach;
	?>
	

</table>
<a class="btn btn-primary" href="index.php?action=them">Thêm thương hiệu mới</a>
<br><br>

<?php include("../view/bottom.php"); ?>
