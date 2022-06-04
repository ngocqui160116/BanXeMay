<?php include("../view/top.php"); ?>

<h3>Quản lý xe</h3> <hr>
<a class="btn btn-success" href="index.php?action=them">Thêm xe</a>
<br>
<table class="table table-hover">
	<tr class="bg-primary">
		<th>Tên xe</th>
		<th>Giá gốc</th>
		<th>Giá bán</th>
		<th>Số lượng tồn</th>
		<th>Hình ảnh</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php 
	foreach ($sanpham as $s):
	?>

	<tr>
		<td><?php echo $s["tenxe"]; ?></td>
		<td><?php echo number_format($s["giagoc"]); ?> đ</td>
		<td><?php echo number_format($s["giaban"]); ?> đ</td>
		<td><?php echo $s["soluongton"]; ?></td>
		<td><img width="80px" src="../../<?php echo $s["hinhanh"]; ?>"></td>
		<td><a class="btn btn-primary" href="?action=sua&id=<?php echo $s["id"]; ?>">Sửa</a></td>
		<td class="text-center"><a class="btn btn-danger" onclick="return confirm('Bạn muốn xóa phải không?')" href="?action=xoa&id=<?php echo $s["id"]; ?>">Xóa</a></td>
	</tr>

	<?php
	endforeach;
	?>
	

</table>
<br><br>


</table>
<br><br>

<?php include("../view/bottom.php"); ?>
