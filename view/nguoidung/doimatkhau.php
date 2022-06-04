<div class="card">
	<h4 class="card-header">Đổi mật khẩu</h4>
	<div class="card-body">
		<form action="index.php?action=xulydoimatkhau" method="post">
        <div class="form-group">
                <input type="hidden" name="id" value = "<?php echo $_SESSION["ID"]; ?>">
				<label for="MatKhau">Mật khẩu cũ</label>
				<input type="password" class="form-control" id="MatKhau" name="MatKhauCu" required />
			</div>
			<div class="form-group">
				<label for="MatKhau">Mật khẩu Mới</label>
				<input type="password" class="form-control" id="MatKhau" name="MatKhauMoi" required />
			</div>
			
			<button type="submit" class="btn btn-primary"><i class="far fa-user-edit"></i>	 Đổi Mật Khẩu</button>
		</form>
	</div>
</div>