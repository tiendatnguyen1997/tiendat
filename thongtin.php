<?php
include("config.php");
$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
$ketnoi->set_charset("utf8");
$ma = $_GET['maviec'];
$sql= "select *from vieclam join(chungchi) on vieclam.maCC = chungchi.maCC join(nganh) on vieclam.manganh = nganh.manganh join(vanbang) on vieclam.maVB = vanbang.maVB  where vieclam.maviec = '$ma'";
$result = mysqli_query($ketnoi, $sql);
$row = mysqli_fetch_assoc($result);
//$a = $row[0];
//$sql1 = "select tennganh from nganh, vieclam where maviec='$a' vieclam.manganh = nganh.manganh";
//echo $a;
//exit();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<title></title>
	<link rel="stylesheet" href="style/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/css/font-lato.css">
	<link rel="stylesheet" href="style/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/css/style.css">
	<style type="text/css">
	body,td,th {
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
    </style>
</head>
<body>
	<nav class="navbar navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header text-center hidden-xs">
	      <a class="navbar-brand" href="index.php">
	      	<img src="img/logo.png" alt="">
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
	  </div>
	</nav>
	<section id="page">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<tr class="odd gradeX">
                      <table width="1000px" >
  <tr>
    <td>Tên việc:</td>
    <td><?php echo $row['tenviec']?></td>
  </tr>
  <tr>
    <td>Mức lương:</td>
    <td><?php echo $row['mucluong']?></td>
  </tr>
  <tr>
    <td>Kinh nghiệm:</td>
    <td><?php echo $row['kinhnghiem']?></td>
  </tr>
  <tr>
    <td>Số lượng tuyển:</td>
    <td><?php echo $row['soluongtuyen']?></td>
  </tr>
  <tr>
    <td>Địa điểm làm việc:</td>
    <td><?php echo $row['diadiemlamviec']?></td>
  </tr>
  <tr>
    <td>Chức vụ:</td>
    <td><?php echo $row['chucvu']?></td>
  </tr>
  <tr>
    <td>Thời gian làm việc:</td>
    <td><?php echo $row['thoigianlamviec']?></td>
  </tr>
  <tr>
    <td>Độ tuổi</td>
    <td><?php echo $row['dotuoi']?></td>
  </tr>
  <tr>
    <td>Giới tính:</td>
    <td><?php echo $row['gioitinh']?></td>
  </tr>
  <tr>
    <td>Bằng cấp: </td>
    <td><?php echo $row['tenVB']?></td>
  </tr>
  <tr>
    <td>Chứng chỉ:</td>
    <td><?php echo $row['tenCC']?></td>
  </tr>
  <tr>
    <td>Ngành học</td>
    <td><?php echo $row['tennganh']?></td>
  </tr>
  <tr>
    <td>Hạn nộp:</td>
    <td><?php echo $row['hannopHS']?></td>
  </tr>
</table>

                    </tr>
				</div>
			</div>
		</div>
		
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="ft-logo text-center">
						<img src="img/logo.png" />
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