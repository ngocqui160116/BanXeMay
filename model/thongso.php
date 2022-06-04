<?php
class THONGSO{

    public function themthongso($tensanpham,$klbt,$drc,$kctbx,$dcy,$ksgx,$dtbx,$kcl,$pt,$ps,$ldc,$cstd,$dtnm,$mttnl,$hs,$ltd,$htkd,$mmcd,$dtxl,$pit,$tsn){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO thongso(tensanpham,khoiluongbanthan,dairongcao,khoangcachtrucbanhxe,docaoyen,khoangsanggamxe,dungtichbinhxang,kichcolop,phuoctruoc,phuocsau,loaidongco,congsuattoida,dungtichnhotmay,muctieuthunhienlieu,hopso,loaitruyendong,hethongkhoidong,momentcucdai,dungtichxylanh,pittong,tysonen)
             VALUES(:tensanpham,:khoiluongbanthan,:dairongcao,:khoangcachtrucbanhxe,:docaoyen,:khoangsanggamxe,:dungtichbinhxang,:kichcolop,:phuoctruoc,:phuocsau,:loaidongco,:congsuattoida,:dungtichnhotmay,:muctieuthunhienlieu,:hopso,:loaitruyendong,:hethongkhoidong,:momentcucdai,:dungtichxylanh,:pittong,:tysonen)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tensanpham", $tensanpham);
            $cmd->bindValue(":khoiluongbanthan", $klbt);
            $cmd->bindValue(":dairongcao", $drc);
            $cmd->bindValue(":khoangcachtrucbanhxe", $kctbx);
            $cmd->bindValue(":docaoyen", $dcy);
            $cmd->bindValue(":khoangsanggamxe", $ksgx);
            $cmd->bindValue(":dungtichbinhxang", $dtbx);
            $cmd->bindValue(":kichcolop", $kcl);
            $cmd->bindValue(":phuoctruoc", $pt);
            $cmd->bindValue(":phuocsau", $ps);
            $cmd->bindValue(":loaidongco", $ldc);
            $cmd->bindValue(":congsuattoida", $cstd);
            $cmd->bindValue(":dungtichnhotmay", $dtnm);
            $cmd->bindValue(":muctieuthunhienlieu", $mttnl);
            $cmd->bindValue(":hopso", $hs);
            $cmd->bindValue(":loaitruyendong", $ltd);
            $cmd->bindValue(":hethongkhoidong", $htkd);
            $cmd->bindValue(":momentcucdai", $mmcd);
            $cmd->bindValue(":dungtichxylanh", $dtxl);
            $cmd->bindValue(":pittong", $pit);
            $cmd->bindValue(":tysonen", $tsn);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Lấy danh sách
    public function laythongso(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM thongso";
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

    // Lấy danh mục theo id
    public function laythongsomax(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT MAX(id) FROM thongso";
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
