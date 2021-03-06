<!DOCTYPE html>
<html lang="en">
<head>
  <title>Honda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <style>
  h3{
    text-shadow: 2px 2px 2px silver;
  }
  .carousel-inner img {  
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  footer {
      background-color: #990000;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .navbar .row div.col-md-12{
    height: 45px;
    position: relative;
    background: linear-gradient(to top, #222, #626566);
  }
  .navbar .row div.col-md-12 ul li.account-register{
    padding-right:190px;
  }
  .navbar .row div.col-md-12 ul li.hotline{
    padding-left:320px;
  }
  .navbar .container div.logo1 a.logo img{
    vertical-align:middle;
    height: 60px;
    float: left;
    padding-right: 23px;
    padding-left: 30px
  }
   nav.navbar div.container div.collapse ul.nav li.search{
    padding-top:10px;
    font-size: 15px;
  }
  </style>
</head>
<body id="abc" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="row">
    <div class="col-md-12">
      <ul class="nav navbar-nav topmenu-contact pull-left">
        <li class="hotline">
          <a href="#">
            <i class="bx bx-phone-call"></i>
              HOTLINE: 0794969843
          </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(!isset($_SESSION['id']))
          {
        ?>
          <li class="account-login"><a href="?action=dangnhap"><i class="fas fa-sign-in-alt"></i>????ng nh???p</a></li>
          <li class="account-register"><a href="?action=dangky"><i class="fas fa-user-plus"></i> ????ng k??</a></li>
			<?php
				}
				else
				{
			?>	 
        
					<li class="nav-item dropdown">
						<!-- index.php?action=doimatkhau  |  index.php?action=capnhathoso -->
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-user"></span> Ch??o
              <?php
                if(isset($_SESSION["nguoidung"])) echo $_SESSION["nguoidung"]["hoten"];
              ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#" data-toggle="modal" data-target="#fcapnhathoso"><span class="glyphicon glyphicon-edit"></span> H??? s?? c?? nh??n</a></li>
              <li><a href="#" data-toggle="modal" data-target="#fdoimatkhau"><span class="glyphicon glyphicon-wrench"></span> ?????i m???t kh???u</a></li>
              <li class="divider"></li>
              <li><a href="../ktnguoidung/index.php?action=dangxuat"><span class="glyphicon glyphicon-log-out"></span> Tho??t</a></li>
            </ul>
					</li>
					
					<?php
						if($_SESSION['loai'] == 1)
						{
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fad fa-cog"></i> Qu???n l??</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?action=sach"><i class="fad fa-fw fa-file"></i> S??ch</a>
							<a class="dropdown-item" href="index.php?action=loaisach"><i class="fad fa-fw fa-file"></i> Lo???i s??ch</a>
							<a class="dropdown-item" href="index.php?action=nhaxuatban"><i class="fad fa-fw fa-file"></i> Nh?? xu???t b???n</a>
							<a class="dropdown-item" href="index.php?action=dathang"><i class="fad fa-fw fa-file"></i> ?????t h??ng</a>
							<a class="dropdown-item" href="index.php?action=nguoidung"><i class="fad fa-fw fa-file"></i> Ng?????i d??ng</a>
						</div>
					</li>
					<?php
						}
					?>
					
          <li class="nav-item"><a class="nav-link" href="index.php?action=dangxuat"><i class="fad fa-sign-out-alt"></i> ????ng xu???t</a></li>
			<?php
				}
			?>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="logo1">
      <a class="logo" href="index.php">
        <img src="images/logo2.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?action=gioithieu">GI???I THI???U</a></li> 
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown">
            S???N PH???M<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <?php            
             foreach($loaixe as $lx):
            ?>
            <li><a href="?action=xemnhom&maloaixe=<?php echo $lx["id"]; ?>"><?php echo $lx["tenloaixe"]; ?></a></li>
            <?php 
              endforeach; 
            ?>
          </ul>
        </li>              
        <li><a href="?action=lienhe">D???CH V???</a></li>
        <li><a href="?action=lienhe">LI??N H???</a></li>

        <li>
          <a href="#" data-toggle="modal" data-target="#modalTimKiem">
          <span class="glyphicon glyphicon-search"></span></a>
        </li>  
        <li class="search"><input type="text" value="" name="name" placeholder="T??m ki???m s???n ph???m"/></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="order-check">
          <a href="?action=kiemtradonhang">
            <i class="bx bx-edit"></i>
          Ki???m tra ????n h??ng
          </a>
        </li>
        <li><a href="?action=xemgiohang" class="text-warning">
          <span class="glyphicon glyphicon-shopping-cart"></span> Gi??? h??ng
          <span class="badge"><?php echo demhangtronggio(); ?></span>
           </a>
        </li>             
      </ul>
    </div>
  </div>
</nav>

  <!-- H???p t??m ki???m -->
  <div class="modal fade" id="modalTimKiem" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4><span class="glyphicon glyphicon-search"></span> B???n c???n t??m g???</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="txttukhoa"><span class="glyphicon glyphicon-question"></span> T??? kh??a: </label>
              <input type="text" class="form-control" id="txttukhoa" placeholder="Nh???p t??? kh??a">
            </div>
            <div class="form-group">
              <label for="optbang"> Trong: </label>
              <select name="optbang" class="form-control" id="optbang">
                <option value="sanpham">S???n ph???m</option>
                <option value="baiviet">Tin t???c</option>
              </select>
            </div>
              <button type="submit" class="btn btn-info">T??m ki???m  
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

<br>
