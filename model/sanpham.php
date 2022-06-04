<?php
class SANPHAM{
	//thuoc tinh
    private $id;
    private $tendanhmuc;

    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }

    public function getTenxe(){
        return $this->tenxe;
    }

    public function setTenxe($value){
        $this->tenxe = $value;
    }

    public function getGiagoc(){
        return $this->giagoc;
    }

    public function setGiagoc($value){
        $this->giagoc = $value;
    }

    public function getGiaban(){
        return $this->giaban;
    }

    public function setGiaban($value){
        $this->giaban = $value;
    }

    public function getThuonghieu_id(){
        return $this->thuonghieu_id;
    }

    public function setThuonghieu_id($value){
        $this->thuonghieu_id = $value;
    }

    public function getMauxe_id(){
        return $this->mauxe_id;
    }

    public function setMauxe_id($value){
        $this->mauxe_id = $value;
    }

    public function getLoaixe_id(){
        return $this->loaixe_id;
    }

    public function setLoaixe_id($value){
        $this->loaixe_id = $value;
    }
    public function getKichthuoc_id(){
        return $this->kichthuoc_id;
    }

    public function setKichthuoc_id($value){
        $this->kichthuoc_id = $value;
    }

    public function getDongco_id(){
        return $this->dongco_id;
    }

    public function setDongco_id($value){
        $this->Dongco_id = $value;
    }
    
    public function getBaohanh_id(){
        return $this->baohanh_id;
    }

    public function setBaohanh_id($value){
        $this->baohanh_id = $value;
    }

    public function getTinhtrang_id(){
        return $this->tinhtrang_id;
    }

    public function setTinhtrang_id($value){
        $this->tinhtrang_id = $value;
    }

    public function getXoa(){
        return $this->xoa;
    }

    public function setXoa($value){
        $this->xoa = $value;
    }

    public function getSoluongton(){
        return $this->soluongton;
    }

    public function setSoluongton($value){
        $this->soluongton = $value;
    }

    public function laysanpham(){
		$dbcon = DATABASE::connect();
		try
		{
			$sql = "SELECT * FROM sanpham";
			$cmd = $dbcon->prepare($sql);
			$cmd->execute();
			$result = $cmd->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
	}
    public function themsanpham($tensanpham,$mauxe,$giagoc,$giaban,$hinhanh,$soluongton,$thuonghieu_id, $loaixe_id, $baohanh_id,$tinhtrang_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO sanpham(tenxe,mauxe,giagoc,giaban,hinhanh,soluongton,thuonghieu_id,loaixe_id,baohanh_id,tinhtrang_id)
             VALUES(:tenxe,:mauxe,:giagoc,:giaban,:hinhanh,:soluongton,:thuonghieu_id,:loaixe_id,:baohanh_id,:tinhtrang_id)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenxe", $tensanpham);
            $cmd->bindValue(":mauxe", $mauxe);
            $cmd->bindValue(":giagoc", $giagoc);
            $cmd->bindValue(":giaban", $giaban);
            $cmd->bindValue(":hinhanh", $hinhanh);
            $cmd->bindValue(":soluongton", $soluongton);
            $cmd->bindValue(":thuonghieu_id", $thuonghieu_id);
            $cmd->bindValue(":loaixe_id", $loaixe_id);
            $cmd->bindValue(":baohanh_id", $baohanh_id);
            $cmd->bindValue(":tinhtrang_id", $tinhtrang_id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function xoasanpham($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM sanpham WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    public function suasanpham($id,$tenxe,$mauxe,$giagoc,$giaban,$hinhanh,$soluongton,$thuonghieu_id,$loaixe_id,$baohanh_id,$tinhtrang_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE sanpham SET tenxe=:tenxe,mauxe:=mauxe, giagoc=:giagoc, giaban=:giaban, hinhanh=:hinhanh, soluongton=:soluongton, thuonghieu_id=:thuonghieu_id,loaixe_id=:loaixe_id,baohanh_id=:baohanh_id,tinhtrang_id=:tinhtrang_id WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->bindValue(":tenxe", $tenxe);
            $cmd->bindValue(":mauxe", $mauxe);
            $cmd->bindValue(":giagoc", $giagoc);
            $cmd->bindValue(":giaban", $giaban);
            $cmd->bindValue(":hinhanh", $hinhanh);
            $cmd->bindValue(":soluongton", $soluongton);
            $cmd->bindValue(":thuonghieu_id", $thuonghieu_id);
            $cmd->bindValue(":loaixe_id", $loaixe_id);
            $cmd->bindValue(":baohanh_id", $baohanh_id);
            $cmd->bindValue(":tinhtrang_id", $tinhtrang_id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function demtongsanpham() {
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM sanpham";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchColumn();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Lấy danh sách các mặt hàng trong khoảng chỉ định
    public function laysanphamtrongkhoangchidinh($batdau, $soluong) {
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT s.*, l.tenloaixe FROM sanpham s, loaixe l WHERE l.id=s.loaixe_id ORDER BY id DESC LIMIT $batdau, $soluong";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    public function laysanphamnoibat(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT m.*, d.tenloaixe FROM sanpham m, loaixe d WHERE d.id=m.loaixe_id ORDER BY giaban DESC LIMIT 0, 4";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function laysanphamtheoloaixe($loaixe_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham WHERE loaixe_id=:maloaixe" ;
            $cmd = $dbcon->prepare($sql);
			$cmd->bindValue(":maloaixe",$loaixe_id);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Lấy mặt hàng theo id
    public function laysanphamtheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
}
?>
