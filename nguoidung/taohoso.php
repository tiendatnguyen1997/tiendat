
<?php

session_start();
include("../config.php");
include "../classes/Db.class.php";
		$user = $_SESSION["tv"]["ten"];
		/*$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
		$ketnoi->set_charset("utf8");*/
		/*$qr = " select * from thanhvien where ten ='$user'";
		$result = mysqli_query($ketnoi, $qr);
        $row = mysqli_fetch_array($result);*/
$db = new Db(); 
$data = $db->query("select * from thanhvien where ten ='$user' ");
$row = $data[0];

        if (isset($_POST['ten'])){
        	
                $maTV = $_SESSION["tv"]["maTV"];
                $manganh = $_POST['N'];
                $maVB = $_POST['VB'];
                $ngaytao = $_POST['ngaytao'];
                $CC = $_POST['CC'];
                
                $sql2="insert cv (macv, maTV, manganh, maVB, ngaytao) values (NULL,'$maTV', '$manganh', '$maVB','$ngaytao')";
                $db->query($sql2);

                $qr1 = "select macv from cv where cv.maTV='$maTV' order by macv desc  ";
                $data = $db->query($qr1);

              //  $result2 = mysqli_query($ketnoi, $qr1);
                $macv = $data[0]['macv'];
                
                foreach ($CC as $key => $value) {
                	 $sql3 ="insert co (maCC, macv) values ('$value', '$macv')";
                	$db->query($sql3);
                 	
                 }
                /*$result = mysqli_query($ketnoi, $sql2);
                $result1 = mysqli_query($ketnoi, $sql3);*/
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
                <div class="panel-heading">tạo hồ sơ </div>
            </div>
                <div class="input-group">tên: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="ten" required="required" readonly="true" value="<?=$row[3]?>">
                </div>
                <div class="input-group">
                    Email: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="email" required="required"  readonly="true" value="<?=$row[1]?>">
                </div>
                <div class="input-group">số điện thoại: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="sdt"required="required"  readonly="true" value="<?=$row[4]?>">
                </div>
                <div class="select-dropdown"></div>
                </div>
                <?php include("include/VB.php")?>
                <?php include("include/N.php") ?>
                <?php include("include/CC.php") ?>
                <div class="input-group">ngày tạo &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input--style-1" type="text" name="ngaytao"required="required" readonly="true" value="<?php echo date('Y/m/d');?>">
                </div>
                <div class="p-t-20"><button class="btn btn--radius btn--green" type="submit" name="btn_submit">tạo CV</button>
                </div>
        </form>
	</section>
	<script src="Script/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="Script/bootstrap.min.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="Script/javascript.js" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>