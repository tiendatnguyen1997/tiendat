<?php
    $o = new PDO("mysql:host=localhost; dbname=timviec", "root", "");
    $o->query("set names 'utf8' ");
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        //echo "<pre>"; print_r($_POST);
            $tencty = $_POST['ten'];
            $diachi = $_POST['dc'];
            $masothue = $_POST['mst'];
            $username = $_POST['user'];
            $pass = $_POST['pass'];
          //  $sm= postIndex("btn_submit");
           $sql="insert into nhatuyendung ( tencty, diachi, masothue, username, pass) value('$tencty', '$diachi', '$masothue', '$username', '$pass')";
            $o->query($sql);
            
             header('location:../index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>đăng ký thành viên</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading">
                </div>
                <div class="card-body">
                    <h2 class="title">Đăng Ký thành viên</h2>
                    <form actor="index.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="tên công ty" name="tencty" required="required">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="địa chỉ" name="dc">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="mã số thuế" name="mst">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="username" name="user"  >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="password" name="pass"  >
                        </div>
             <div class="select-dropdown"></div>
                </div>
            </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="btn_submit">Đăng Ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
