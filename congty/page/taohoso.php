<?php

session_start();

include("../../config.php");
		$user = $_SESSION["ct"]["tencty"];
		$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
		$ketnoi->set_charset("utf8");
		$qr = " select * from nhatuyendung where tencty ='$user'";



		$result = mysqli_query($ketnoi, $qr);
        $row = mysqli_fetch_array($result);


        if (isset($_POST['tao']))
        {
        $tenviec=$_POST['tenviec'];
        $mucluong=		$_POST['mucluong'];
   		$kinhnghiem=	$_POST['kinhnghiem'];
        $soluongtuyen=	$_POST['soluong'];
        $diadiem=		$_POST['diadiem'];
        $chucvu=		$_POST['chucvu'];
      	$macty=$_SESSION["ct"]["macty"];
        $thoigian=		$_POST['thoigian'];
        $dotuoi=		$_POST['tuoi'];
        $gioitinh=		$_POST['thoigian'];
        $hannophoso=	$_POST['hannophoso'];
  	 	$idbc1=			$_POST['BC'];
     	$idcc1=			$_POST['CC'];
     	$idn1=			$_POST['N'];

        $qr1 = "insert into vieclam (maviec, tenviec, mucluong, kinhnghiem, macty, soluongtuyen, diadiemlamviec, chucvu, thoigianlamviec, dotuoi, gioitinh, trangthai, hannopHS, maVB, maCC, manganh) VALUES (NULL, '$tenviec', '$mucluong', '$kinhnghiem','$macty', '$soluongtuyen', '$diadiem','$chucvu','$thoigian', '$dotuoi','$gioitinh','0','$hannophoso','$idbc1','$idcc1','$idn1')";
        echo $qr1;
        exit();
        $result1 = mysqli_query($ketnoi, $qr1);
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
                <div class="panel-heading">tạo công việc</div>
            </div>
                <div class="input-group">mã số thuế: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="ten" required="required"readonly="true"  value="<?=$row[3]?>">
                </div>
                <div class="input-group">
                    tên công ty: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="email" required="required" readonly="true" value="<?=$row[1]?>">
                </div>
                <div class="select-dropdown"></div>
                </div>
                <div class="input-group">
                    tên việc: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="tenviec" required="required"value="">
                </div>
                <div class="input-group">
                    mức lương: <input class="input--style-1" type="text" name="mucluong" required="required"value="">
                </div>
                <div class="input-group">
                    kinh nghiệm: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="kinhnghiem" required="required"value="">
                </div>
                <div class="input-group">
                    số lượng tuyển: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="soluong" required="required"value="">
                </div>
                <div class="input-group">
                   địa điểm làm việc: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="diadiem" required="required"value="">
                </div>
                <div class="input-group">
                    chức vụ: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="chucvu" required="required"value="">
                </div>
                <div class="input-group">
                    thời gian làm việc: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="thoigian" required="required"value="">
                </div>
                <div class="input-group">
                    độ tuổi: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="tuoi" required="required"value="">
                </div>
                <div class="input-group">
                    giới tính: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="gioitinh" required="required"value="">
                </div>
                <?php include("../include/VB.php")?>
                <?php include("../include/N.php") ?>
                <?php include("../include/CC.php") ?>

                <div class="input-group">thời hạn:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="hannophoso"required="required"  value="<?php echo date('d/m/Y');?>">
                </div>
                <div class="p-t-20"><button class="btn btn--radius btn--green" type="submit" name="tao">tạo</button>
                </div>
        </form>
	</section>
	<script src="../Script/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="../Script/bootstrap.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="../Script/javascript.js" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>