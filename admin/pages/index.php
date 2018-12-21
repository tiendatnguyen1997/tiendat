<?php
ob_start();

session_start();
  if(!isset($_SESSION["nv"]))
   header("location: ../account/index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hệ thống quản trị</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">hệ thống quản trị</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="divider"></li>
                    </ul>
                </li>
                        <li><a href="thoat.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li>
                            <a href="thanhvien/thanhvien.php"><i class="fa fa-edit fa-fw"></i> quản lý thành viên</a>
                        </li>
                        <li>
                            <a href="chungchi/chungchi.php"><i class="fa fa-edit fa-fw"></i> quản lý chứng chỉ</a>
                        </li>
                        <li>
                            <a href="vanbang/vanbang.php"><i class="fa fa-edit fa-fw"></i> quản lý văn bằng</a>
                        </li>
                        <li>
                            <a href="nganh/nganh.php"><i class="fa fa-edit fa-fw"></i> quản lý ngành</a>
                        </li>
                        <li>
                            <a href="CV/CV.php"><i class="fa fa-edit fa-fw"></i> quản lý CV</a>
                        </li>
                        <li>
                            <a href="congty/congty.php"><i class="fa fa-edit fa-fw"></i> quản lý Công Ty</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
                    <h1 class="page-header">Xin chào <?=$_SESSION["nv"]["ten"]?></h1>
              </div>
            <img src="../../img/CRM_Globe.png" width="1060" height="400" alt="hinhnen"> </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
