<?php 
  require("model/database.php");
  require("model/danhmuc.php");
  require("model/mathang.php");
  
  if(isset($_GET["id"]))
    $danhmuc_id = $_GET["id"];
  else
    $danhmuc_id =  1;
  if(isset($_GET["id"]))
    $mathang_id = $_GET["id"];
  else
    $mathang_id =  1;

  $dm = new DANHMUC();
  $mh = new MATHANG();
  $danhmuc = $dm->laydanhmuc();
  $mathang = $mh->laymathang();

  $mathanghienhanh = $mh->laymathangtheoid($mathang_id);
  //$mhtheodanhmuc = $mh->laymathangtheodanhmuc($mathanghienhanh["danhmuc_id"]);
  $mathangnoibat=$mh->laymathangluotxemcao();

  //$mh->tangluotxem($mathanghienhanh["id"]);

  include("include/top.php");
?>

<div class="container">

  <div class="row">

    <?php 
      foreach ($mathangnoibat as $m):
        
    ?>


    <div class="col-sm-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          <a style="color:black" href="detai.php?id=<?php echo $d["id"]; ?>">
          <?php echo $m["tenmathang"]; ?>
          </a>  
        </div>
        <div class="panel-body">
          <a href="detail.php?id=<?php echo $m["id"]; ?>"><img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive fake" alt="<?php echo $m["tenmathang"]; ?>"></a>

          <p>Lượt xem: <?php echo $m["luotxem"]; ?></p>
          <div>Giá bán: <span class="text-danger"><?php echo number_format($m["giaban"]); ?>vnd</span></div>
        </div>
        <div class="panel-footer">
          <a class="btn btn-success" href="detail.php?id=<?php echo $m["id"]; ?>">Xem thêm</a>
          <a class="btn btn-warning" href="">Thêm vào giỏ</a>
        </div>
      </div>
    </div>    
    <?php 
            
      endforeach;
    ?>
    
  </div>

</div>



<?php 
  include("include/bottom.php");
?>