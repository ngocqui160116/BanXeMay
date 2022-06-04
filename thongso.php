<div class="row">    
  <table class="table table-hover">
    <tr class="bg-primary">
      <td>tên</td>
      <td>thông tin</td>
    </tr>
    <?php 
    foreach ($thongso as $ts):
    ?>

    <tr>
      <td>Loại động cơ</td>
      <td><?php echo $ts["loaidongco"]; ?></td>
    </tr>
    <tr>
      <td>Tỷ số nén</td>
      <td><?php echo $ts["tysonen"]; ?></td>
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
      <td>Khoảng cách gầm xe</td>
      <td><?php echo $ts["khoangcachgamxe"]; ?></td>
    </tr>
    <tr>
      <td>Dung tích bình xăng</td>
      <td><?php echo $ts["dungtichbinhxang"]; ?></td>
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
      <td>Công suất tối đa</td>
      <td><?php echo $ts["congsuattoida"]; ?></td>
    </tr>
    <tr>
      <td>Khối lượng bản thân</td>
      <td><?php echo $ts["khoiluongbanthan"]; ?></td>
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
      <td>Dài x Rộng x Cao</td>
      <td><?php echo $ts["dairongcao"]; ?></td>
    </tr>
    <tr>
      <td>Kích cỡ lớp trước/sau</td>
      <td><?php echo $ts["kichcolop"]; ?></td>
    </tr>
    <tr>
      <td>Đường kính x Hành trình pít tông</td>
      <td><?php echo $ts["pittong"]; ?></td>
    </tr>
    <?php
    endforeach;
    ?>
    

  </table>
</div>