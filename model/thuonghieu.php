<?php
class THUONGHIEU{
    private $id;
    private $tenthuonghieu;
    private $hinhanh;

    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }

    public function getTenthuonghieu(){
        return $this->tenthuonghieu;
    }

    public function setTenthuonghieu($value){
        $this->tenthuonghieu = $value;
    }

    public function getHinhanh(){
        return $this->hinhanh;
    }

    public function setHinhanh($value){
        $this->hinhanh = $value;
    }

    // Lấy danh sách
    public function laythuonghieu(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM thuonghieu";
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
    public function themthuonghieu($tenthuonghieu,$hinhanh){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO thuonghieu(tenthuonghieu,hinhanh) VALUES(:tenthuonghieu,:hinhanh)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenthuonghieu", $tenthuonghieu);
            $cmd->bindValue(":hinhanh", $hinhanh);
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
    public function xoathuonghieu($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM thuonghieu WHERE id=:id";
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
    public function laydanhmuctheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM danhmuc WHERE id=:id";
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
