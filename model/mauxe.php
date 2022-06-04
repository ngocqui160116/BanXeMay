<?php
class MAUXE{

    // Lấy danh sách
    public function laymauxe(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM mauxe";
            $cmd = $dbcon->prepare($sql);
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

    // Thêm mới
    public function themmauxe($tensanpham,$tenmauxe,$giagoc,$giaban,$hinhanh,$soluongton){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO mauxe(tensanpham,mauxe,giagoc,giaban,hinhanh,soluongton) VALUES(:tensanpham,:tenmauxe,:giagoc,:giaban,:hinhanh,:soluongton)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tensanpham", $tensanpham);
            $cmd->bindValue(":tenmauxe", $tenmauxe);
            $cmd->bindValue(":giagoc", $giagoc);
            $cmd->bindValue(":giaban", $giaban);
            $cmd->bindValue(":hinhanh", $hinhanh);
            $cmd->bindValue(":soluongton", $soluongton);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Xóa 
    public function xoadanhmuc($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM danhmuc WHERE id=:id";
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

    // Cập nhật 
    public function suadanhmuc($id, $tendm){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE danhmuc SET tendanhmuc=:tendanhmuc WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tendanhmuc", $tendm);
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

    // Lấy danh mục theo id
    public function laymauxetheoid($mauxe_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM mauxe WHERE id=:mauxe_id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":mauxe_id", $mauxe_id);
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
    public function laymauxemax(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT MAX(id) FROM mauxe";
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

}
?>
