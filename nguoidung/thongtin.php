
<?php

session_start();
include("../config.php");
		$user = $_SESSION["tv"]["ten"];
		$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
		$ketnoi->set_charset("utf8");
		$qr = " select * from thanhvien where ten ='$user'";
		$result = mysqli_query($ketnoi, $qr);
        $row = mysqli_fetch_array($result);
        if (isset($_POST['ten'])){
        
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $ten = $_POST['ten'];
                $sdt = $_POST['sdt'];
                //echo  $email . " - " . $pass . " - " . $ten . " - " . $sdt;
                $sql2="update thanhvien set email = '$email', pass = '$pass', ten = '$ten', sdt = '$sdt' where ten = '$ten'";
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
	<link rel="stylesheet" href="../style/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style/css/font-lato.css">
	<link rel="stylesheet" href="../style/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header text-center hidden-xs">
	      <a class="navbar-brand" href="nguoidung.php">
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
	  </div>
	</nav>
	<section id="page">
		<form actor="thongtintaikhoan" method="POST">
			<div class="panel panel-default">
                <div class="panel-heading">thông tin tài khoản</div>
            </div>
                <div class="input-group" >
                    Email: <input class="input--style-1" type="text" name="email" required="required" value="<?=$row[1]?>">
                </div>
                <div class="input-group" >mật khẩu: <input class="input--style-1" type="text"  name="pass"required="required"  value="<?=$row[2]?>">
                </div>
                <div class="input-group">tên: <input class="input--style-1" type="text" name="ten"required="required"  value="<?=$row[3]?>">
                </div>
                <div class="input-group">số điện thoại: <input class="input--style-1" type="text" name="sdt"required="required"  value="<?=$row[4]?>">
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
	<script src="Script/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="Script/bootstrap.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="Script/javascript.js" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>