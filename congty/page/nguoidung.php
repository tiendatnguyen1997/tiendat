<?php
ob_start();
session_start();
  
  if(!isset($_SESSION["ct"]))
   header("location: index.php");

?>
<?php
  if(isset($_POST['btnthoat'])){
    //unset($_SESSION["tv"]);
    header("location:../../index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<title></title>
	<link rel="stylesheet" href="../../style/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../style/css/font-lato.css">
	<link rel="stylesheet" href="../../style/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../style/css/style.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header text-center hidden-xs">
	      <a class="navbar-brand" href="../index.php">
	      	<img src="../img/logo.png" alt="">
	      </a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li>
			<div class="search-box">
				<div class="input-group">
					<input type="text" id="news-letter" class="form-control" placeholder="Tìm công việc">
					<div class="input-group-btn">
						<button class="btn btn-danger" type="button">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>
	      </li>

	    </ul>
	   <td border="1" width="1200px" align="right">
	  </td>
	   
	  </div>
	</nav>
		<section id="page">
			<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="control-box">
						<a href="taohoso.php">
							<div class="left-box">
								<h3 class="title">
									Tạo công việc
								</h3>
								<p class="desc-box">
									Tạo công việc để tuyển dụng
								</p>
							</div>
							<div class="right-box">
								<div class="icon-box">
									<i class="fa fa-3x fa-paper-plane" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="control-box">
						<a href="thongtin.php"  class="haft-box">
							<div class="text-center ">
								<i class="fa fa-3x fa-file-text-o" aria-hidden="true"></i>
								<h3 class="sub-title">thông tin của bạn</h3>
							</div>
						</a>
						<a href="logout.php" class="haft-box">
							<div class="text-center">
								<i class="fa fa-3x fa-sign-in" aria-hidden="true"></i>
								<h3 class="sub-title">Đăng xuất</h3>
							</div>
						</a>
					</div>
				</div>
		<div class="container">
			<h1 class="primary-title">công việc của bạn</h1>
			<hr>
			<div class="job">
				<?php
					include("../include/DScongviecCT.php");
				?>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="ft-logo text-center">
						<img src="../../img/logo.png" />
					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<ul class="ft-ul">
						<li class="ft-about">
							Tuyển dụng, tìm việc nhanh hiệu quả cùng timviecnhanh
						</li>
						<li class="ft-company-name">
							<h3>Công ty TNHH-XD-DV Codeweb </h3>
						</li>
						<li><strong>Trụ sở chính: </strong> Tòa nhà Code Dạo, 180 Cao Lỗ, Phường 4, Quận 8, TP Hồ Chí Minh  </li>
						<li>
							<strong>Điện thoại: </strong>(028) 3850 8265 | <strong>Fax: </strong>(028) 3850 6595 
						</li>
						<li><strong>Email hỗ trợ NTD 1: </strong>tiendatthpt2012z2015@gmail.com</li> 
						<li><strong>Email hỗ trợ NTD 2: </strong>trinhngocbaotran0712@gmail.com</li> 
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="Script/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="Script/bootstrap.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="Script/javascript.js" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>