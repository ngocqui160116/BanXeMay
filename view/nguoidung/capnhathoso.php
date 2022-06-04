<div class="card">
	<h4 class="card-header">Cập Nhật Hồ Sơ</h4>
	<div class="card-body">
		<form action="index.php?action=xulycapnhathoso" method="post">
        <div class="form-group">
                <input type="hidden" name="id" value = "<?php echo $_SESSION["ID"]; ?>">
				<label for="">Họ và Tên</label>
				<input type="text" class="form-control" id="" name="HoVaTen" required />
			</div>
			<div class="form-group">
				<label for="">Tên Đăng Nhập</label>
				<input type="text" class="form-control" id="" name="TenDangNhap" required />
			</div>
			
			<button type="submit" class="btn btn-primary"><i class="fal fa-pen-alt"></i>Cập Nhật</button>
		</form>
	</div>
</div>