<?php include("view/top.php"); ?>
<br><br>
<div class="container">    
  <div class="row">
    <div class="col-sm-9">   
      <br><br>   
      <h3>Trang chủ > <?php echo $tenloaixe; ?> > <?php echo $spct["tenxe"]; ?></h3><hr>  
      <h2 class="text-danger"><?php echo $spct["tenxe"]; ?></h2>
      
      <div><img src="<?php echo $spct["hinhanh"]; ?>"></div>

      <h4 class="text-primary">Giá bán lẽ đề xuất: 
        <span class="text-danger"><?php echo number_format($spct["giaban"]); ?> đ</span>
      </h4>

      <div>
        <form action="" class="form-inline" method="post">
          <input type="hidden" name="action" value="chovaogio">
          <input type="hidden" name="id" value="<?php echo $spct['id']; ?>">
          <input type="number" class="form-control" name="soluong" value="1">
          <input type="submit" value="Chọn mua" class="btn btn-primary">
        </form>
      </div>
      <br>
    </div>
    <div class="col-sm-3"> 
      <h3>Sản phẩm cùng loại:</h3>
      <div style="height: 300px">
      <marquee direction="up" onmouseover="stop()" onmouseout="start()">
      <?php
      foreach($sanpham as $sp):  
        if($sp["id"] != $spct["id"]){
      ?>
      <div>
        <div class="panel panel-info text-center">
          <div class="panel-heading">
          <a href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">
            <?php echo $sp["tenxe"]; ?>
          </a>
          </div>
          <div class="panel-body">      
            <a href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">
            <img src="<?php echo $sp["hinhanh"]; ?>" class="img-responsive" style="width:100%"></a>
            <div>Giá bán: <span  class="text-danger">
            <?php echo number_format($sp["giaban"]); ?>đ</span>  
            </div>
          </div> 
          <div class="panel-footer"><a class="btn btn-info" href="?action=xemchitiet&sanpham=<?php echo $sp["id"]; ?>">
            Chi tiết</a> 
            <a class="btn btn-danger" href="?action=chovaogio&txtsanpham=<?php echo $sp["id"]; ?>&txtsoluong=1">Chọn mua</a>  
          </div>  
           
        </div>
      </div>
      <?php 
        }
      endforeach; 
      ?>
      </marquee>
      </div>
    </div>    
   
    <table class="table table-hover">
      <tr class="bg-primary">
        <td>Thông số kĩ thuật</td>
      </tr>
      <?php 
      foreach ($thongso as $ts):
      ?>
      
      <tr>
        <td>Khối lượng bản thân</td>
        <td><?php echo $ts["khoiluongbanthan"]; ?></td>
      </tr>
      <tr>
        <td>Dài x Rộng x Cao</td>
        <td><?php echo $ts["dairongcao"]; ?></td>
      </tr>
      <tr>
        <td>Khoảng cách trục bánh xe</td>
        <td><?php echo $ts["khoangcachtrucbanhxe"]; ?></td>
      </tr>
      <tr>
        <td>Độ cao yên</td>
        <td><?php echo $ts["docaoyen"]; ?></td>
      </tr>
      <tr>
        <td>Khoảng sáng gầm xe</td>
        <td><?php echo $ts["khoangsanggamxe"]; ?></td>
      </tr>
      <tr>
        <td>Dung tích bình xăng</td>
        <td><?php echo $ts["dungtichbinhxang"]; ?></td>
      </tr>
      <tr>
        <td>Kích cỡ lớp trước/sau</td>
        <td><?php echo $ts["kichcolop"]; ?></td>
      </tr>
      <tr>
        <td>Phuộc trước</td>
        <td><?php echo $ts["phuoctruoc"]; ?></td>
      </tr>
      <tr>
        <td>Phuộc sau</td>
        <td><?php echo $ts["phuocsau"]; ?></td>
      </tr>
      <tr>
        <td>Loại động cơ</td>
        <td><?php echo $ts["loaidongco"]; ?></td>
      </tr>
      <tr>
        <td>Công suất tối đa</td>
        <td><?php echo $ts["congsuattoida"]; ?></td>
      </tr>
      <tr>
        <td>Dung tích nhớt máy</td>
        <td><?php echo $ts["dungtichnhotmay"]; ?></td>
      </tr>
      <tr>
        <td>Mức tiêu thụ nhiên liệu</td>
        <td><?php echo $ts["muctieuthunhienlieu"]; ?></td>
      </tr>
      <tr>
        <td>Hộp số</td>
        <td><?php echo $ts["hopso"]; ?></td>
      </tr>
      <tr>
        <td>Loại truyền động</td>
        <td><?php echo $ts["loaitruyendong"]; ?></td>
      </tr>
      <tr>
        <td>Hệ thống khởi động</td>
        <td><?php echo $ts["hethongkhoidong"]; ?></td>
      </tr>
      <tr>
        <td>Moment cực đại</td>
        <td><?php echo $ts["momentcucdai"]; ?></td>
      </tr>
      <tr>
        <td>Dung tích xy-lanh</td>
        <td><?php echo $ts["dungtichxylanh"]; ?></td>
      </tr>
      <tr>
        <td>Đường kính x Hành trình pít tông</td>
        <td><?php echo $ts["pittong"]; ?></td>
      </tr>
      <tr>
        <td>Tỷ số nén</td>
        <td><?php echo $ts["tysonen"]; ?></td>
      </tr>
      <?php
      endforeach;
      ?>
      

    </table>
  </div>
  
</div>

<?php include("view/bottom.php"); ?>