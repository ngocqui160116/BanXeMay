<?php
class KHACHHANG{
	public function themkhachhang($email,$sodt,$hoten){
		$db = DATABASE::connect();
		try{
			$sql = "INSERT INTO nguoidung(email,matkhau,sodienthoai,hoten,loai,trangthai) VALUES(:email,:matkhau,:sodt,:hoten,3,1)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':email',$email);
			$cmd->bindValue(':matkhau',md5($sodt));
			$cmd->bindValue(':sodt',$sodt);
			$cmd->bindValue(':hoten',$hoten);
			$cmd->execute();
			$id = $db->lastInsertId();
			return $id;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "<p>Lỗi truy vấn: $error_message</p>";
			exit();
		}
	}
}
?>
