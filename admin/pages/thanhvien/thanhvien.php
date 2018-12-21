<?php
ob_start();

session_start();
    require("../../../include/thanhvien.php");
  
  if(!isset($_SESSION["nv"]))
   header("location: ../../account/index.php");

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
                            <a href="thanhvien.php"><i class="fa fa-edit fa-fw"></i> quản lý thành viên</a>
                        </li>
                        <li>
                            <a href="../chungchi/chungchi.php"><i class="fa fa-edit fa-fw"></i> quản lý chứng chỉ</a>
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
                            quản lý thành viên 
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Tên</th>
                                        <th>Số Điện Thoại</th>
                                        <th width="85">Chức Năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $thanhvien = DSThanhVien();
                                    while($row_thanhvien = mysqli_fetch_array($thanhvien))
                                    {
                                        ob_start();
                                ?>
                                    <tr class="odd gradeX">
                                        <td>{maTV}</td>
                                        <td>{email}</td>
                                        <td>{password}</td>
                                        <td>{ten}</td>
                                        <td><center>{sdt}</center></td>
                                        <td><a href="suathanhvien.php?maTV={maTV}&email={email}&pass={password}&ten={ten}&sdt={sdt}"><button class="login100-form-btn" name="btnsua" >khóa</button></a> 
                                        <a href="xoathanhvien.php?maTV={maTV}"><button class="login100-form-btn" name="btnxoa">mở</button></a></td>
                                    </tr>
                                    <?php
                                      $s = ob_get_clean();
                                      $s = str_replace("{maTV}",$row_thanhvien['maTV'],$s);
                                      $s = str_replace("{email}",$row_thanhvien['email'],$s);
                                      $s = str_replace("{password}",$row_thanhvien['pass'],$s);
                                      $s = str_replace("{ten}",$row_thanhvien['ten'],$s);
                                      $s = str_replace("{sdt}",$row_thanhvien['sdt'],$s);
                                      echo $s;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
