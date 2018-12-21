<?php
    include("../../../config.php");
    $maCC = $_GET['maCC'];
    if(isset($_POST['ma']) && isset($_POST['ten'])){
        
                $maCC = $_POST['ma'];
                $tenCC = $_POST['ten'];
               // echo $maCC . " - " . $tenCC;
                $sql2="update chungchi set tenCC = '$tenCC' where maCC = '$maCC'";
                $result = mysqli_query($ketnoi, $sql2);
                header("location: chungchi.php");
        
    }

        $sql = "select * from chungchi where maCC ='$maCC'";
        $result = mysqli_query($ketnoi, $sql);
        $row = mysqli_fetch_array($result);
        
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
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">hệ thống quản trị</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="divider"></li>
                    </ul>
                </li>
                        <li><a href="../thoat.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="../thanhvien/thanhvien.php"><i class="fa fa-edit fa-fw"></i> quản lý thành viên</a>
                        </li>
                        <li>
                            <a href="chungchi.php"><i class="fa fa-edit fa-fw"></i> quản lý chứng chỉ</a>
                        </li>
                        <li>
                            <a href="../vanbang/vanbang.php"><i class="fa fa-edit fa-fw"></i> quản lý văn bằng</a>
                        </li>
                        <li>
                            <a href="../nganh/nganh.php"><i class="fa fa-edit fa-fw"></i> quản lý ngành</a>
                        </li>
                        <li>
                            <a href="../CV/CV.php"><i class="fa fa-edit fa-fw"></i> quản lý CV</a>
                        </li>
                        <li>
                            <a href="../congty/congty.php"><i class="fa fa-edit fa-fw"></i> quản lý Công Ty</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            quản lý chứng chỉ 
                        </div>
                            <form actor="suaCC.php" method="POST">
                        <div class="input-group">
                            mã chứng chỉ: <input class="input--style-1" type="text" name="ma" required="required" readonly="true" value="<?=$maCC?>">
                        </div>
                        <div class="input-group">
                            tên chứng chỉ: <input class="input--style-1" type="text" placeholder="nhập tên" name="ten"required="required"  value="<?=$row[1]?>">
                        </div>
                            <div class="select-dropdown"></div>
                    </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="btn_submit">cập nhật</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../../dist/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
