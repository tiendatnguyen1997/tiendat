
<?php

session_start();
include("../../config.php");
		$user = $_SESSION["ct"]["tencty"];
		$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
		$ketnoi->set_charset("utf8");
		$qr = " select * from nhatuyendung where tencty ='$user'";
		$result = mysqli_query($ketnoi, $qr);
        $row = mysqli_fetch_array($result);
        if (isset($_POST['ten'])){
        
                $ten = $_POST['ten'];
                $diachi = $_POST['DC'];
                $MST = $_POST['MST'];
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                //echo  $email . " - " . $pass . " - " . $ten . " - " . $sdt;
                $sql2="update nhatuyendung set tencty = '$ten', diachi = '$diachi', masothue = '$MST', username = '$username', pass = '$pass' where tencty = '$ten'";
                $result = mysqli_query($ketnoi, $sql2);
                header("location: thongtin.php");
        
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
	      <a class="navbar-brand" href="nguoidung.php">
	      	<img src="../../img/logo.png" alt="">
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
		<form actor="thongtintaikhoan" method="POST">
			<div class="panel panel-default">
                <div class="panel-heading">thông tin tài khoản</div>
            </div>
                <div class="input-group" >
                    Tên Công Ty: <input class="input--style-1" type="text" name="ten" required="required" value="<?=$row[1]?>">
                </div>
                <div class="input-group" >Địa chỉ: <input class="input--style-1" type="DC"  name="pass"required="required"  value="<?=$row[2]?>">
                </div>
                <div class="input-group">mã số thuế: <input class="input--style-1" type="MST" name="ten"required="required"  value="<?=$row[3]?>">
                </div>
                <div class="input-group">username: <input class="input--style-1" type="username" name="sdt"required="required"  value="<?=$row[4]?>">
                </div>
                <div class="input-group">password: <input class="input--style-1" type="pass" name="sdt"required="required"  value="<?=$row[5]?>">
                </div>
                <div class="select-dropdown"></div>
                </div>
                <div class="p-t-20"><button class="btn btn--radius btn--green" type="submit" name="btn_submit">sửa</button>
                </div>
        </form>
			<div class="panel panel-default">
                <div class="panel-heading">hồ sơ của bạn</div>
            </div>
                <div class="p-t-20"><a href="taohoso.php"><button class="btn btn--radius btn--green" type="submit" name="btn_submit">tạo hồ sơ</button></a>
                </div>
	</section>
	<script src="../Script/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="../Script/bootstrap.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="../Script/javascript.js" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>